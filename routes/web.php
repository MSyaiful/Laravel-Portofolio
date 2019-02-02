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
//
Route::get('/Blog', 'BlogController@getData');

Route::get('/delete/{id}', 'BlogController@delete')->name('blog.delete');


Route::get('/input', 'BlogController@simpan');
Route::post('/simpan', 'BlogController@proses_simpan')->name('blog.simpan');


Route::get('/edit/{id}', 'BlogController@edit')->name('blog.edit');
Route::post('/update', 'BlogController@update')->name('blog.update');
//
Route::get('/halo', function(){
	return "Hello World";
});

Route::get('/materi1', function(){
	return view("materi1");
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blade1',function(){
	return view('blade1');
});

Route::get('/about',function(){
	return view('about');
});

Route::get('/cobablog',function(){
	return view('cobablog');
});

Route::get('/beranda',function(){
	return view('beranda');
});

Route::get('/portofolio',function(){
	return view('portofolio');
});

Route::get('/artikel',function(){
	return view('artikel');
});