<?php

namespace App\Http\Controllers\Article;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller{

    public function index(Request $request){
        return view('welcome');
    }


}
