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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/article/{slug}', 'HomeController@show')->name('article');

Route::post('/article/comment/{id}', 'CommentController@postComment')->name('postComment');

Route::prefix('/admin')->name('admin.')->group(function () {

    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/login-process', 'AuthController@loginProcess')->name('loginProcess');
    Route::get('/register', 'AuthController@register')->name('register');
    Route::post('/register-process', 'AuthController@registerProcess')->name('registerProcess');
    Route::post('/logout', 'AuthController@logout')->name('logout');

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::prefix('/articles')->name('articles.')->group(function () {
        Route::get('/', 'ArticleController@index')->name('index');
        Route::get('/create', 'ArticleController@create')->name('create');
        Route::post('/store', 'ArticleController@store')->name('store');
        Route::get('/edit/{id}', 'ArticleController@edit')->name('edit');
        Route::put('/update/{id}', 'ArticleController@update')->name('update');
        Route::delete('/delete/{id}', 'ArticleController@delete')->name('delete');
    });

    Route::prefix('/categories')->name('categories.')->group(function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/store', 'CategoryController@store')->name('store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
        Route::put('/update/{id}', 'CategoryController@update')->name('update');
        Route::delete('/delete/{id}', 'CategoryController@delete')->name('delete');
    });

    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/show/{id}', 'UserController@show')->name('show');
        Route::get('/edit/{id}', 'UserController@edit')->name('edit');
        Route::get('/update/{id}', 'UserController@update')->name('update');
        Route::get('/delete/{id}', 'UserController@delete')->name('delete');
    });
});
