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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', function () {
        return view('admin.home.index');
    });
    Route::get('/tag', function () {
        return view('admin.tag.index');
    });
    Route::get('/user', function () {
        return view('admin.user.index');
    });
    Route::get('/recipe', function () {
        return view('admin.recipe.index');
    });
    Route::get('/recipe/edit', function () {
        return view('admin.recipe.edit');
    });
});