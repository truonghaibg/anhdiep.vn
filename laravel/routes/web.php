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

Route::group(['namespace'=>'backend', 'prefix' => 'backend'], function () {
    Route::group(['prefix'=>'login'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    Route::group(['prefix'=>'register'], function () {
        Route::get('/', 'LoginController@getRegister');
        Route::post('/', 'LoginController@postRegister');
    });

    Route::group(['prefix'=>'logout'], function () {
        Route::get('/', 'LoginController@getLogout');
    });

    Route::group(['prefix'=>'forget-password'], function () {
        Route::get('/', 'LoginController@getForgetPassword');
        Route::post('/', 'LoginController@postForgetPassword');
    });

    Route::group(['prefix'=>'/', 'middleware'=>'checkLogin'], function () {
        Route::group(['prefix'=>'home'], function () {
            Route::get('view', 'HomeController@index');
        });

        Route::group(['prefix'=>'category'], function () {
            Route::get('add', 'CategoryController@getAdd');
            Route::post('add', 'CategoryController@postAdd');
            Route::get('view', 'CategoryController@getView');
            Route::get('edit/{id}', 'CategoryController@getEdit')->where(['id'=>'[0-9]+']);
            Route::post('edit/{id}', 'CategoryController@postEdit')->where(['id'=>'[0-9]+']);
            Route::get('delete/{id}', 'CategoryController@getDelete')->where(['id'=>'[0-9]+']);
        });
    });
});


Route::get('/', function () {
    return view('welcome');
});
