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

Route::get('/', 'TourController@home')->name('index');

Auth::routes();
Route::group(['prefix' => 'tours'], function() {
    Route::get('/', ['as' => 'tours.index', 'uses' => 'TourController@index']);
    Route::post('/show/{id}', ['as' => 'tours.saveBook', 'uses' => 'TourController@saveBook']);
    Route::get('/show/{id}', ['as' => 'tours.show', 'uses' => 'TourController@show']);
});

Route::group(['prefix' => 'pages'], function() {
    Route::get('/about', ['as' => 'page.about', 'uses' => 'PageController@about']);
    Route::get('/search', ['as' => 'page.search', 'uses' => 'PageController@search']);
    Route::post('/search', ['as' => 'page.search', 'uses' => 'PageController@search']);
    Route::get('/searchNormal', ['as' => 'page.searchNormal', 'uses' => 'PageController@searchNormal']);
    Route::post('/searchNormal', ['as' => 'page.searchNormal', 'uses' => 'PageController@searchNormal']);
});

Route::group(['prefix' => 'hotels'], function() {
    Route::get('/', ['as' => 'hotels.index', 'uses' => 'HotelsController@index']);
    Route::post('/show/{id}', ['as' => 'hotels.saveBook', 'uses' => 'HotelsController@saveBook']);
    Route::get('/show/{id}', ['as' => 'hotels.show', 'uses' => 'HotelsController@show']);
});
Route::get('/tour', 'TourController@index')->name('tour');
Route::get('/tour/detail', 'TourController@dd')->name('tour-detail');
Route::group(['prefix' => 'admin','middleware' => ['role:superadministrator|administrator']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'tours'], function() {
        Route::get('/', ['as' => 'tour.index', 'uses' => 'TuorDetailController@index']);
        Route::get('/create', ['as' => 'tour.create', 'uses' => 'TuorDetailController@create']);
        Route::get('/create', ['as' => 'tour.create', 'uses' => 'TuorDetailController@create']);
        Route::post('/', ['as' => 'tour.store', 'uses' => 'TuorDetailController@store']);
        Route::get('/edit/{id}', ['as' => 'tour.edit', 'uses' => 'TuorDetailController@edit']);
        Route::post('/edit/{id}', ['as' => 'tour.update', 'uses' => 'TuorDetailController@update']);
        Route::get('/delete/{id}', ['as' => 'tour.delete', 'uses' => 'TuorDetailController@destroy']);
        Route::post('{id}/remove/img', ['as' => 'tour.delete.img', 'uses' => 'TuorDetailController@deleteImage']);
    });

    Route::group(['prefix' => 'customers'], function() {
        Route::get('/', ['as' => 'customer.index', 'uses' => 'CustomerController@index']);
        Route::get('/create', ['as' => 'customer.create', 'uses' => 'CustomerController@create']);
        Route::get('/create', ['as' => 'customer.create', 'uses' => 'CustomerController@create']);
        Route::post('/', ['as' => 'customer.store', 'uses' => 'CustomerController@store']);
        Route::get('/edit/{id}', ['as' => 'customer.edit', 'uses' => 'CustomerController@edit']);
        Route::post('/edit/{id}', ['as' => 'customer.update', 'uses' => 'CustomerController@update']);
        Route::get('/delete/{id}', ['as' => 'customer.delete', 'uses' => 'CustomerController@destroy']);
        Route::post('{id}/remove/img', ['as' => 'customer.delete.img', 'uses' => 'CustomerController@deleteImage']);
    });

    Route::group(['prefix' => 'cars'], function() {
        Route::get('/', ['as' => 'car.index', 'uses' => 'CarController@index']);
        Route::get('/create', ['as' => 'car.create', 'uses' => 'CarController@create']);
        Route::post('/', ['as' => 'car.store', 'uses' => 'CarController@store']);
        Route::get('/edit/{id}', ['as' => 'car.edit', 'uses' => 'CarController@edit']);
        Route::post('/edit/{id}', ['as' => 'car.update', 'uses' => 'CarController@update']);
        Route::get('/delete/{id}', ['as' => 'car.delete', 'uses' => 'CarController@destroy']);
        Route::post('{id}/remove/img', ['as' => 'car.delete.img', 'uses' => 'CarController@deleteImage']);
    });

//    Route::group(['prefix' => 'hotels'], function() {
//        Route::get('/', ['as' => 'hotel.index', 'uses' => 'HotelController@index']);
//        Route::get('/create', ['as' => 'hotel.create', 'uses' => 'HotelController@create']);
//        Route::post('/', ['as' => 'hotel.store', 'uses' => 'HotelController@store']);
//        Route::get('/edit/{id}', ['as' => 'hotel.edit', 'uses' => 'HotelController@edit']);
//        Route::post('/edit/{id}', ['as' => 'hotel.update', 'uses' => 'HotelController@update']);
//        Route::get('/delete/{id}', ['as' => 'hotel.delete', 'uses' => 'HotelController@destroy']);
//        Route::post('{id}/remove/img', ['as' => 'hotel.delete.img', 'uses' => 'Hotel@deleteImage']);
//    });

    Route::group(['prefix' => 'rules'], function() {
        Route::get('/', ['as' => 'rules.index', 'uses' => 'RuleController@index']);
        Route::get('/create', ['as' => 'rules.create', 'uses' => 'RuleController@create']);
        Route::post('/', ['as' => 'rules.store', 'uses' => 'RuleController@store']);
        Route::get('/edit/{id}', ['as' => 'rules.edit', 'uses' => 'RuleController@edit']);
        Route::post('/edit/{id}', ['as' => 'rules.update', 'uses' => 'RuleController@update']);
        Route::get('/delete/{id}', ['as' => 'rules.delete', 'uses' => 'RuleController@destroy']);
    });

    Route::group(['prefix' => 'question-neo', 'middleware' => ['role:superadministrator']], function() {
        Route::get('/', ['as' => 'neo.index', 'uses' => 'QuestionNeoController@index']);
        Route::get('/create', ['as' => 'neo.create', 'uses' => 'QuestionNeoController@create']);
        Route::post('/', ['as' => 'neo.store', 'uses' => 'QuestionNeoController@store']);
        Route::get('/edit/{id}', ['as' => 'neo.edit', 'uses' => 'QuestionNeoController@edit']);
        Route::post('/edit/{id}', ['as' => 'neo.update', 'uses' => 'QuestionNeoController@update']);
        Route::get('/delete/{id}', ['as' => 'neo.delete', 'uses' => 'QuestionNeoController@destroy']);
        Route::post('{id}/remove/img', ['as' => 'neo.delete.img', 'uses' => 'QuestionNeoController@deleteImage']);
    });

    Route::group(['prefix' => 'question-riasec'], function() {
        Route::get('/', ['as' => 'riasec.index', 'uses' => 'QuestionRiaSecController@index']);
        Route::get('/create', ['as' => 'riasec.create', 'uses' => 'QuestionRiaSecController@create']);
        Route::post('/', ['as' => 'riasec.store', 'uses' => 'QuestionRiaSecController@store']);
        Route::get('/edit/{id}', ['as' => 'riasec.edit', 'uses' => 'QuestionRiaSecController@edit']);
        Route::post('/edit/{id}', ['as' => 'riasec.update', 'uses' => 'QuestionRiaSecController@update']);
        Route::get('/delete/{id}', ['as' => 'riasec.delete', 'uses' => 'QuestionRiaSecController@destroy']);
        Route::post('{id}/remove/img', ['as' => 'riasec.delete.img', 'uses' => 'QuestionRiaSecController@deleteImage']);
    });

    Route::group(['prefix' => 'question-difficult-psychology'], function() {
        Route::get('/', ['as' => 'psychology.index', 'uses' => 'QuestionDifficultPsychologyController@index']);
        Route::get('/create', ['as' => 'psychology.create', 'uses' => 'QuestionDifficultPsychologyController@create']);
        Route::post('/', ['as' => 'psychology.store', 'uses' => 'QuestionDifficultPsychologyController@store']);
        Route::get('/edit/{id}', ['as' => 'psychology.edit', 'uses' => 'QuestionDifficultPsychologyController@edit']);
        Route::post('/edit/{id}', ['as' => 'psychology.update', 'uses' => 'QuestionDifficultPsychologyController@update']);
        Route::get('/delete/{id}', ['as' => 'psychology.delete', 'uses' => 'QuestionDifficultPsychologyController@destroy']);
        Route::post('{id}/remove/img', ['as' => 'psychology.delete.img', 'uses' => 'QuestionDifficultPsychologyController@deleteImage']);
    });

    Route::group(['prefix' => 'explain-question-neo'], function() {
        Route::get('/', ['as' => 'explainneo.index', 'uses' => 'ExplainQuestionNEOController@index']);
        Route::get('/create', ['as' => 'explainneo.create', 'uses' => 'ExplainQuestionNEOController@create']);
        Route::post('/', ['as' => 'explainneo.store', 'uses' => 'ExplainQuestionNEOController@store']);
        Route::get('/edit/{id}', ['as' => 'explainneo.edit', 'uses' => 'ExplainQuestionNEOController@edit']);
        Route::post('/edit/{id}', ['as' => 'explainneo.update', 'uses' => 'ExplainQuestionNEOController@update']);
        Route::get('/delete/{id}', ['as' => 'explainneo.delete', 'uses' => 'ExplainQuestionNEOController@destroy']);
        Route::post('{id}/remove/img', ['as' => 'explainneo.delete.img', 'uses' => 'ExplainQuestionNEOController@deleteImage']);
    });

});



