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
/********************* Settings **********************/
Route::get('/clear-view', function() {
    Artisan::call('view:clear');
    return "View is cleared";
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/cache-route', function() {
    Artisan::call('route:cache');
    return "Route is cleared";
});

Route::get('/cache-config', function() {
    Artisan::call('config:cache');
    return "Config cache is cleared";
});

Route::get('/clear-config', function() {
    Artisan::call('config:clear');
    return "Config is cleared";
});
/****************************************************/
Route::get('/', [
	'uses' => 'PublicController@index',
	'as' =>'inicio'
]);

Route::get('/mercados', [
	'uses' => 'PublicController@mercados',
	'as' =>'mercados'
]);

Route::get('/sobre-nosotros', [
	'uses' => 'PublicController@nosotros',
	'as' =>'nosotros'
]);

Route::get('/noticias', [
	'uses' => 'PublicController@noticias',
	'as' =>'noticias'
]);

Route::get('/tutoriales', [
	'uses' => 'PublicController@tutoriales',
	'as' =>'tutoriales'
]);


Route::get('/tutoriales-ajax/{id}', [
	'uses' => 'PublicController@tutorialesAjax',
	'as' =>'tutoriales-ajax'
]);

Route::get('/blog', [
	'uses' => 'PublicController@blog',
	'as' =>'blog'
]);

//Ver Tutorial:
Route::get('/blog-{titulo}', [
	'uses' => 'PublicController@verBlog',
	'as' =>'verBlog'
]);

Route::get('/monedas', [
	'uses' => 'PublicController@monedas',
	'as' =>'monedas'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
