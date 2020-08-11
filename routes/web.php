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
|•••••••••
 */

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/admin')->name('admin.')->group(function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::prefix('/articles')->name('articles.')->group(function () {
        Route::get('/', 'ArticleController@index')->name('index');
        Route::get('/create', 'ArticleController@create')->name('create');
        Route::post('/store', 'ArticleController@store')->name('store');
        Route::get('/edit/{id}', 'ArticleController@edit')->name('edit');
        Route::put('/update', 'ArticleController@update')->name('update');
        Route::delete('/update', 'ArticleController@update')->name('update');
    });

    Route::prefix('/categories')->name('categories.')->group(function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/store', 'CategoryController@store')->name('store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
        Route::put('/update', 'CategoryController@update')->name('update');
        Route::delete('/update', 'CategoryController@update')->name('update');
    });

    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/create', function () {
            return view('welcome');
        })->name('create');
    });
});
