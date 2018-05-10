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
    return view('home');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/tour', 'TourController@index')->name('tour');
Route::get('/tour/detail', 'TourController@dd')->name('tour-detail');
Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'tours'], function() {
        Route::get('/', ['as' => 'tour.index', 'uses' => 'TuorDetailController@index']);
        Route::get('/create', ['as' => 'tour.create', 'uses' => 'TuorDetailController@create']);
        Route::get('/create', ['as' => 'tour.create', 'uses' => 'TuorDetailController@create']);
        Route::post('/', ['as' => 'tour.store', 'uses' => 'TuorDetailController@store']);
        Route::get('/edit/{id}', ['as' => 'tour.edit', 'uses' => 'TuorDetailController@edit']);


    });
});



