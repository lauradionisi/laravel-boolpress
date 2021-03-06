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

Route::get('/', 'HomeController@index')->name('guest-homepage');

Route::prefix('posts')
        ->group(function () {
            Route::get('/', 'PostController@index')->name('posts.index');
            Route::get('/{slug}', 'PostController@show')->name('posts.show');

        });

Route::prefix('categories')
        ->group(function () {
            Route::get('/', 'CategoryController@index')->name('categories.index');
            Route::get('/{slug}', 'CategoryController@show')->name('categories.show');

        });  




Auth::routes();

// Route::get('/admin', 'HomeController@index')->name('admin-homepage')->middleware('auth');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('admin-homepage');
        Route::resource('/posts', PostController::class)->names([
            'index'=> 'admin.posts.index',
            'create'=> 'admin.posts.create',
            'delete'=> 'admin.posts.destroy',
            'update'=> 'admin.posts.update',
            'show'=> 'admin.posts.show',
            'edit'=> 'admin.posts.edit',
            'store'=> 'admin.posts.store',
        ]);

});
