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

Auth::routes();
Route::get('/', 'SiteController@index');
Route::get('/blog', 'BlogController@index')->name('blogs');
Route::get('/blog/{blog}', 'BlogController@show')->name('blog');

Route::group(['middleware' => ['auth' => 'admin'] ], function() {
    Route::get('/dashboard', 'SiteController@dashboard')->name('home');
    Route::resource('/dashboard/users', 'Admin\UserController');
    Route::get('/user-edit/{id}', 'Admin\UserController@edit' );
    Route::put('/user-role-update/{{id}}', 'Admin\UserController@userupdate');
    Route::delete('/user-delete/{{$id}}', 'Admin\UserController@userdelete');

    Route::resource('/dashboard/blogs', 'Admin\BlogController');
    Route::get('/blog-create', 'Admin\BlogController@create');

    Route::resource('/dashboard/fishes', 'Admin\FishController');
    Route::get('/fish-add', 'Admin\FishController@create');
    Route::post('dashboard/fish-store', 'Admin\FishController@store');
    Route::get('/fish-edit/{id}', 'Admin\FishController@edit' );
    Route::put('/fish-update/{id}', 'Admin\FishController@update');
    
});

