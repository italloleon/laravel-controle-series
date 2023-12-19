<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('series', SeriesController::class)
    ->missing(function (Request $request){
        return Redirect::route('series.index');
    });

Route::resource('series.seasons', SeriesController::class)
    ->missing(function (Request $request){
        return Redirect::route('series.index');
    });

//Route::controller(SeriesController::class)->group(function (){
//    Route::get('/series',  'index');
//    Route::get('/series/criar',  'create');
//    Route::post('/series/salvar',  'store');
//});
