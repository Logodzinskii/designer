<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;

class ControllerPortfolio extends Controller
{
    public function __construct()
    {

    }

    /**
     * Выводит все возможные работы с пагинцией
     */
    public function index()
    {
        $data=[];
        $photo = portfolio::all();
        $data[]=[
            'photos'=>$photo,
        ];

        return view('/pages/portfolio',['content'=>$data]);
    }
    public function adminIndex()
    {
        $portfolio = portfolio::all();
        return view('admin/adminViewPortfolio',['portfolios' => $portfolio]);
    }


    /**
     * Возвращает 10 работ портфолио
     */
    public function previwe()
    {

    }

    /**
     * Возвращает Отдельно каждую работу
     */
    public function showPortfolio($category, $url)
    {
        $portfolio = portfolio::where('url', $url)->get();

        return view('/pages/project/project', ['portfolios' => $portfolio]);
    }

    public function createPortfolio(Request $request)
    {
        $portfolio = new portfolio();

        $arr = [
            'Дом' => 'home',
            'Квартира' => 'house',
            'Офис' => 'office'
        ];
        $category = $arr[$request->category];
        /**
         * Сохраним файлы портфолио
         */
        $pathName = 'images/projects/'.$category.'/'.md5(time());
        $paths = [];
        if($request->hasFile('files'))
        {
            foreach ($request->file('files') as $files) {
                $names = $files->getClientOriginalName();

                $files->move($pathName .'/fullImages/', $names);
                $paths[] = $pathName .'/fullImages/' . $names;
            }
        }
        $pathPreview = '';
        if($request->hasFile('main_images'))
        {
            $file = $request->file('main_images');
            $name = $file->getClientOriginalName();
            $file->move($pathName .'/previewImages/', $name);
            $pathPreview = $pathName .'/previewImages/' . $name;
        }
        $pathScheme = '';
        if($request->hasFile('scheme'))
        {
            $file1 = $request->file('scheme');
            $name1 = $file1->getClientOriginalName();
            $file1->move($pathName .'/schemeImages/', $name1);
            $pathScheme = $pathName .'/schemeImages/' . $name1;
        }
        $portfolio = new portfolio();
        $portfolio->name =          $request->name;
        $portfolio->category =      $category;
        $portfolio->options =       $request->options;
        $portfolio->tag =           $request->tag;
        $portfolio->images =        json_encode($paths);
        $portfolio->main_images =   $pathPreview;
        $portfolio->scheme_images = $pathScheme;
        $portfolio->url =           $this->chpuTrunslit($request->name);
        $portfolio->save();
        return \redirect('/admin/portfolios/view/');
    }
    protected function chpuTrunslit($string)
    {
        $translit = [
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'e',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
            'й' => 'j',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'h',
            'ц' => 'ts',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shch',
            'ъ' => '',
            'ы' => 'y',
            'ь' => '',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya',
            ' ' => '-',
            '"' => '',
            '.' => '',
            '@' => '',
            '&' => '',
            '?' => '',
            '«' => '',
            '»' => '',
        ];

        $string = mb_strtolower($string);
        return strtr($string, $translit);
    }
    public function deletePortfolio($id)
    {
        $portfolio = portfolio::where('id', $id)->get();

        /**
         * Получу зашифрованное имя папки проекта
         */
        $pathToDelete = explode('/', $portfolio[0]['main_images']);
        $pathToDelete = 'images/projects/'.$pathToDelete[2].'/'.$pathToDelete[3];
        $this::remove_dir($pathToDelete);
        portfolio::where('id', $id)->delete();
        return \redirect('/admin/portfolios/view/');
    }
    /**
     * @param string $dir
     * @return void
     */
    protected function remove_dir(string $dir):void
    {
        if ($objs = glob($dir . '/*'))
        {

            foreach($objs as $obj)
            {

                is_dir($obj) ? self::remove_dir($obj) : unlink($obj);

            }

        }else{

        }
        rmdir($dir);
    }
}
