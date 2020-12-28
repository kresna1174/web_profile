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

// use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('beranda.index');
});

Route::group(['prefix' =>  'beranda'], function(){
    Route::get('/', 'BerandaController@index')->name('beranda');
});

Route::group(['prefix' => 'FAQ'], function(){
    Route::get('/', 'FaqController@index')->name('FAQ');
});

Route::group(['prefix' =>  'branding'], function(){
    Route::get('/', 'BrandingSolutionController@index')->name('branding');
});

Route::group(['prefix' => 'login'], function(){
    Route::get('/', 'LoginController@indx')->name('login');
});

Route::group(['prefix' => 'register'], function(){
    Route::get('/', 'RegisterController@indx')->name('register');
});