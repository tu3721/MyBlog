<?php

namespace App\Http\Controllers\Article;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller{

    public function index(Request $request){
        if ($request->isMethod('get')){
//            print_r(123);
            return View('dashboard');
        }
    }


}
