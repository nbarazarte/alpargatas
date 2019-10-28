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
/*
Route::get('/', function () {
    return view('indexSmarty');
});
*/
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

Route::get('/blog', [
	'uses' => 'PublicController@blog',
	'as' =>'blog'
]);

Route::get('/monedas', [
	'uses' => 'PublicController@monedas',
	'as' =>'monedas'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
