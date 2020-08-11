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
    Route::get('/', 'DashboardController@index');

    Route::prefix('/articles')->name('articles.')->group(function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('index');
        Route::get('/create', function () {
            return view('welcome');
        })->name('create');
    });

    Route::prefix('/categories')->name('categories.')->group(function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('index');
        Route::get('/create', function () {
            return view('admin.categories.create');
        })->name('create');
    });

    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('index');
        Route::get('/create', function () {
            return view('welcome');
        })->name('create');
    });
});
