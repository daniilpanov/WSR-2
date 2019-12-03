<?php

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

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/page/{id?}', function ($id = null)
{
    return $id === null ?
        (view("home"))
        : (view("page")->with("id", $id));
});

Route::post('/', function ()
{
    return "OK!!!";
});