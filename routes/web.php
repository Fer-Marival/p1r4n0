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
    return view('frontend/pages/index');
});
Route::get('/colecciones', function () {
    return view('frontend/pages/collections');
});
Route::get('/colecciones/summer', function () {
    return view('frontend/pages/summer');
});
Route::get('/colecciones/vista', function () {
    return view('frontend/pages/vista');
});
Route::get('/colecciones/kids', function () {
    return view('frontend/pages/kids');
});
Route::get('/pirano', function () {
    return view('frontend/pages/pirano');
});
Route::get('/colecciones/categoria', function () {
    return view('frontend/pages/category');
});

Route::get('/terminos-condiciones', function () {
    return view('frontend/pages/terminos');
});

Route::post('/newsletter', 'NewsController@index');

Route::get('/contact', [
	'uses' => 'ContactMessageController@create'
]);
Route::post('/contact', [
	'uses' => 'ContactMessageController@store',
	'as' => 'contact.store'
]);
