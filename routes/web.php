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

Route::group(['prefix' => 'hubungi_kami'], function(){
    Route::get('/', 'Hubungi_kamiController@index')->name('hubungi_kami');
    Route::post('mail', 'Hubungi_kamiController@mail');
});