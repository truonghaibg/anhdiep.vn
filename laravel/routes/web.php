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

    Route::group(['prefix'=>'forget-password'], function () {
        Route::get('/', 'LoginController@getForgetPassword');
        Route::post('/', 'LoginController@postForgetPassword');
    });

    Route::group(['prefix'=>'logout'], function () {
        Route::get('/', 'LoginController@getLogout');
    });

    Route::group(['prefix'=>'/', 'middleware'=>'checkAdmin'], function () {
        Route::get('', 'HomeController@index');
        Route::group(['prefix'=>'home'], function () {
            Route::get('', 'HomeController@index');
        });


        Route::group(['prefix'=>'category-product'], function () {
            Route::get('create', 'CategoryProductController@create');
            Route::post('store', 'CategoryProductController@store');
            Route::get('', 'CategoryProductController@index');
            Route::get('index', 'CategoryProductController@index');
            Route::get('view/{id}', 'CategoryProductController@show')->where(['id'=>'[0-9]+']);
            Route::get('edit/{id}', 'CategoryProductController@edit')->where(['id'=>'[0-9]+']);
            Route::post('update/{id}', 'CategoryProductController@update')->where(['id'=>'[0-9]+']);
            Route::get('delete/{id}', 'CategoryProductController@destroy')->where(['id'=>'[0-9]+']);
        });

        Route::group(['prefix'=>'product'], function () {
            Route::get('create', 'ProductController@create');
            Route::post('store', 'ProductController@store');
            Route::get('', 'ProductController@index');
            Route::get('index', 'ProductController@index');
            Route::get('view/{id}', 'ProductController@show')->where(['id'=>'[0-9]+']);
            Route::get('edit/{id}', 'ProductController@edit')->where(['id'=>'[0-9]+']);
            Route::post('update/{id}', 'ProductController@update')->where(['id'=>'[0-9]+']);
            Route::get('delete/{id}', 'ProductController@destroy')->where(['id'=>'[0-9]+']);
        });

        Route::group(['prefix'=>'color'], function () {
            Route::get('create', 'ColorController@create');
            Route::post('store', 'ColorController@store');
            Route::get('', 'ColorController@index');
            Route::get('index', 'ColorController@index');
            Route::get('view/{id}', 'ColorController@show')->where(['id'=>'[0-9]+']);
            Route::get('edit/{id}', 'ColorController@edit')->where(['id'=>'[0-9]+']);
            Route::post('update/{id}', 'ColorController@update')->where(['id'=>'[0-9]+']);
            Route::get('delete/{id}', 'ColorController@destroy')->where(['id'=>'[0-9]+']);
        });

        Route::group(['prefix'=>'size'], function () {
            Route::get('create', 'SizeController@create');
            Route::post('store', 'SizeController@store');
            Route::get('', 'SizeController@index');
            Route::get('index', 'SizeController@index');
            Route::get('view/{id}', 'SizeController@show')->where(['id'=>'[0-9]+']);
            Route::get('edit/{id}', 'SizeController@edit')->where(['id'=>'[0-9]+']);
            Route::post('update/{id}', 'SizeController@update')->where(['id'=>'[0-9]+']);
            Route::get('delete/{id}', 'SizeController@destroy')->where(['id'=>'[0-9]+']);
        });

        Route::group(['prefix'=>'gender'], function () {
            Route::get('create', 'GenderController@create');
            Route::post('store', 'GenderController@store');
            Route::get('', 'GenderController@index');
            Route::get('index', 'GenderController@index');
            Route::get('view/{id}', 'GenderController@show')->where(['id'=>'[0-9]+']);
            Route::get('edit/{id}', 'GenderController@edit')->where(['id'=>'[0-9]+']);
            Route::post('update/{id}', 'GenderController@update')->where(['id'=>'[0-9]+']);
            Route::get('delete/{id}', 'GenderController@destroy')->where(['id'=>'[0-9]+']);
        });

        Route::group(['prefix'=>'role'], function () {
            Route::get('create', 'RoleController@create');
            Route::post('store', 'RoleController@store');
            Route::get('', 'RoleController@index');
            Route::get('index', 'RoleController@index');
            Route::get('view/{id}', 'RoleController@show')->where(['id'=>'[0-9]+']);
            Route::get('edit/{id}', 'RoleController@edit')->where(['id'=>'[0-9]+']);
            Route::post('update/{id}', 'RoleController@update')->where(['id'=>'[0-9]+']);
            Route::get('delete/{id}', 'RoleController@destroy')->where(['id'=>'[0-9]+']);
        });

        Route::group(['prefix'=>'delivery'], function () {
            Route::get('create', 'DeliveryController@create');
            Route::post('store', 'DeliveryController@store');
            Route::get('', 'DeliveryController@index');
            Route::get('index', 'DeliveryController@index');
            Route::get('view/{id}', 'DeliveryController@show')->where(['id'=>'[0-9]+']);
            Route::get('edit/{id}', 'DeliveryController@edit')->where(['id'=>'[0-9]+']);
            Route::post('update/{id}', 'DeliveryController@update')->where(['id'=>'[0-9]+']);
            Route::get('delete/{id}', 'DeliveryController@destroy')->where(['id'=>'[0-9]+']);
        });

        Route::group(['prefix'=>'payment'], function () {
            Route::get('create', 'PaymentController@create');
            Route::post('store', 'PaymentController@store');
            Route::get('', 'PaymentController@index');
            Route::get('index', 'PaymentController@index');
            Route::get('view/{id}', 'PaymentController@show')->where(['id'=>'[0-9]+']);
            Route::get('edit/{id}', 'PaymentController@edit')->where(['id'=>'[0-9]+']);
            Route::post('update/{id}', 'PaymentController@update')->where(['id'=>'[0-9]+']);
            Route::get('delete/{id}', 'PaymentController@destroy')->where(['id'=>'[0-9]+']);
        });


    });
});


Route::get('/', function () {
    return view('welcome');
});
