<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::namespace("App\Http\Controllers\Todoapp")->group(function()
{
    Route::get("/" , "TasksController@index")->name("home");
    Route::get("/gorevekle" , "ListsController@create")->name("GorevEkle");
    Route::post("/ekle" , "ListsController@store")->name("Ekle");
    Route::get("/duzenle/{id}" , "ListsController@edit")->name("Duzenle");
    Route::post("/guncelle/{id}" , "ListsController@update")->name("Guncelle");
    Route::get("/sil/{id}" , "ListsController@destroy")->name("Sil");
    
});
