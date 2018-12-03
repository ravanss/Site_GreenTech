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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {

    Route::group(['prefix'=>'chuva'], function(){
        Route::get('/', 'ChuvaController@index');
        Route::get('/form/{id?}', 'ChuvaController@form');
        Route::post('/adiciona', 'ChuvaController@adiciona');
        Route::get('/excluir/{id}', 'ChuvaController@excluir');
        Route::post('/alterar/{id}', 'ChuvaController@alterar');
    });
    Route::group(['prefix'=>'umidadeSolo'], function(){
        Route::get('/', 'UmidadeSoloController@index');
        Route::get('/form/{id?}', 'UmidadeSoloController@form');
        Route::post('/adiciona', 'UmidadeSoloController@adiciona');
        Route::get('/excluir/{id}', 'UmidadeSoloController@excluir');
        Route::post('/alterar/{id}', 'UmidadeSoloController@alterar');
    });
    Route::group(['prefix'=>'planos'], function(){
        Route::get('/', 'PlanoSensoresController@index');
        Route::get('/assinar/{id}', 'PlanoSensoresController@assinar');
        Route::get('/cancelarAssinatura/{id}', 'PlanoSensoresController@cancelarAssinatura');
    });
    Route::group(['prefix'=>'admin'], function(){
        Route::group(['prefix'=>'planos'], function(){
            Route::get('/listar', 'PlanoSensoresController@listar');
            Route::get('/form/{id?}', 'PlanoSensoresController@form');
            Route::post('/adiciona', 'PlanoSensoresController@adiciona');
            Route::get('/excluir/{id}', 'PlanoSensoresController@excluir');
            Route::post('/alterar/{id}', 'PlanoSensoresController@alterar');
        });
    });

});

