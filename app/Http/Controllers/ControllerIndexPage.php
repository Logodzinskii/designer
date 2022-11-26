<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\ControllerPortfolio;
use Illuminate\Support\Facades\DB;

class ControllerIndexPage extends Controller
{
    public function index()
    {
        $data=[];
        $photo = portfolio::all();
        $data[]=[
            'photos'=>$photo,
        ];
        return view('/pages/index', ['content'=>$data]);
    }
}
