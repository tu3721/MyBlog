<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Article\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);


Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/dashboard', [ArticleController::class, 'index'])->name('dashboard');
    Route::get('/child', function () {return view('child');});
});


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
