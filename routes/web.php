<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\App;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/student", function(){
        return view("template.student");
});


Route::get("/about", [PagesController::class, "about"]);
// Route::get("/about", "App\Http\Controllers\PagesController@about");

Route::get("/school", [PagesController::class, "school"]);