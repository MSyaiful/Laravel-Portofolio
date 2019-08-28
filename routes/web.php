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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index',function(){
    return view('index');
});

Route::get('/profile',function(){
	return view('profile');
});

Route::get('/portofolio',function(){
	return view('portofolio');
});

Route::get('/galeri','GaleriController@get1');

Route::get('/menugaleri',function(){
	return view('menugaleri');
});

Route::get('/artikel', 'ArtikelController@index', function(){
	return view('artikel');
});

Route::get('/menuartikel', 'ArtikelController@get');

Route::get('/isiartikel/{id}', 'ArtikelController@isiartikel')->name('get.art');

Route::get('/deleteartikel/{id}', 'ArtikelController@delete')->name('artikel.delete');

Route::get('/tambahartikel', 'ArtikelController@save');
Route::post('/saveartikel', 'ArtikelController@proses_save')->name('artikel.save');

Route::get('/editartikel/{id}', 'ArtikelController@change')->name('artikel.change');
Route::post('/updateartikel', 'ArtikelController@update')->name('artikel.update');

Route::get('/tbh',function(){
	return view('tbh_kate');
});

Route::get('/cari/{id}', function($id){
	$kate = DB::table('artikel')->where('id_kategori',$id)->get();
	$tit = DB::table('kategori')->where('id',$id)->get();
	return view ('kate', ['kate'=>$kate, 'tit'=>$tit]);
})->name('kate.tbh');

Route::get('/member', 'MemberController@get', function(){
	return view('member');
});

Route::get('/delete/{id}', 'MemberController@delete')->name('member.delete');

Route::get('/tambahmembern', 'MemberController@save');
Route::post('/save', 'MemberController@proses_save')->name('member.save');

Route::get('/tambahmember', 'MemberController@jenis', function(){
	return view('tambahmember');
});

Route::get('/editmember/{id}', 'MemberController@change')->name('member.change');
Route::post('/update', 'MemberController@update')->name('member.update');

Route::post('/tbh_com','CommentController@tambah')->name('tbh_com');

Route::get('/menugaleri', 'GaleriController@get');

Route::post('/tbh','GaleriController@tbh')->name('tbh');
Route::get('tambahgaleri', 'GaleriController@get2',function(){
	return view('tambahgaleri');
});

Route::get('/tambahgaleri', 'GaleriController@save');
Route::post('/savegaleri', 'GaleriController@tbh')->name('galeri.save');
Route::get('/deletegaleri/{id}', 'GaleriController@delete')->name('galeri.delete');

Route::get('/tambahtag', 'TagController@get', function(){
	return view('tambahtag');
});
Route::post('/tambahtag', 'TagController@tambah')->name('tambahtag');

Route::get('/galeri/export_excel', 'GaleriController@excel')->name('export.galeri');

Route::get('/galeri/export_pdf', 'GaleriController@pdf')->name('print.galeri');

Route::get('/galeri/json','GaleriController@json');

