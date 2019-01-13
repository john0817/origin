<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        //echo '首页';
        return '首页';
    }

    public function about()
    {
        return '关于';
    }
}
