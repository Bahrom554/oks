<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

//Route::get('/', function (){
//    echo "hello";
//});

//Route::namespace('Seo')->group(function () {
//    Route::group([
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
//    ], function () {
//        Route::get('/', 'IndexController@defaultPage');
//        Route::get('/category/{slug}', 'IndexController@defaultPage')->where('slug', '[A-aZ-z0-9-]+');
//        Route::get('/tags/{id}', 'IndexController@defaultPage')->where('id', '[0-9]+');
//        Route::get('/news/{slug}', 'IndexController@post')->where('slug', '[A-aZ-z0-9-]+')->name('post');
//        Route::get('/page/{slug}', 'IndexController@page')->where('slug', '[A-aZ-z0-9-]+')->name('page');
//    });
//
//    Route::get('{catchall}', 'IndexController@defaultPage')->where('catchall', '.*');
//});