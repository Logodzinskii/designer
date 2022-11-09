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
        $portfolio = portfolio::all();
        return view('/pages/portfolio',['allportfolio' => $portfolio]);
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
    public function showPortfolio($category, $id)
    {
        $portfolio = portfolio::where('id', $id)->get();
        return view('/pages/project/project', ['portfolio',$portfolio]);
    }

    public function createPortfolio(Request $request)
    {
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
        if($request->hasFile('main_images'))
        {
            $paths = [];
            foreach ($request->file('main_images') as $file) {
                $name = $file->getClientOriginalName();
                $file->move($pathName .'/fullImages/', $name);
                $paths[] = $pathName .'/fullImages/' . $name;
            }
        }
        $pathPreview = '';
        if($request->hasFile('images'))
        {
            $file = $request->file('images');
            $name = $file->getClientOriginalName();
            $file->move($pathName .'/previewImages/', $name);
            $pathPreview = $pathName .'/previewImages/' . $name;
        }

        $portfolio = new portfolio();
        $portfolio->name =          $request->name;
        $portfolio->category =      $category;
        $portfolio->options =       $request->options;
        $portfolio->tag =           $request->tag;
        $portfolio->images =        $pathPreview;
        $portfolio->main_images =   json_encode($paths);
        $portfolio->save();
        return \redirect('/admin/portfolios/view/');
    }
}
