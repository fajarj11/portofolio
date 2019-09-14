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

Route::get('/', 'BlogController@get4', function () {
    return view('/index');
});

Route::get('profil', 'UserController@profil');

Route::post('/profil', 'UserController@update');

Route::get('/tampil', 'BlogController@get');

Route::get('/galery', 'GalleryController@get');

Route::get('/tmpl_member', 'MembershipController@get');

Route::get('/tampil_member_admin', 'MembershipController@get3');

Route::get('/tambah', 'BlogController@get2', function () {
    return view('tambah');
});

Route::get('/tambah_tag', 'TagController@get', function () {
    return view('tambah_tag');
});

Route::get('/tambah_gallery', 'GalleryController@get2', function () {
    return view('tambah_gallery');
});

Route::get('/tambah_member', 'MembershipController@get2', function () {
    return view('tambah_member');
});

Route::get('/tbh_kate', 'CategoryController@get', function() {
    return view('tbh_kate');
});

Route::get('/tbh_komen', 'KomentarController@get', function() {
    return view('tbh_komen');
});

Auth::routes();

Route::post('/tambah', 'BlogController@tambah')->name('tambah');

Route::post('/tambah_tag', 'TagController@tambah')->name('tambah_tag');

Route::post('/tambah_gallery', 'GalleryController@tambah')->name('tambah_gallery');

Route::post('/tbh_komen', 'KomentarController@tambah')->name('tbh_komen');

Route::post('/tambah_member', 'MembershipController@tambah_member')->name('tambah_member');

Route::post('/tbh_kate', 'CategoryController@tambah')->name('tambah.kate');

Route::get('/edit/{id}', 'BlogController@edit')->name('edit');

Route::get('/edit_gallery/{id}', 'GalleryController@edit')->name('edit_gallery');

Route::get('/edit_member/{id}', 'MembershipController@edit')->name('edit.member');

Route::get('/isi/{id}', 'BlogController@isi')->name('blog.isi');

Route::post('/edit', 'BlogController@update')->name('edit.simpan');

Route::post('/edit_gallery', 'GalleryController@update')->name('edit_gallery_simpan');

Route::post('/edit_member', 'MembershipController@update')->name('edt.simpan.member');

Route::get('/del/{id}', 'BlogController@destroy')->name('del');

Route::get('/del_gallery/{id}', 'GalleryController@destroy')->name('del_gallery');

Route::get('/del.member/{id}', 'MembershipController@destroy')->name('del.member');

Route::post('/tbh_kom', 'KomentarController@tambah')->name('tbh_kom');

Route::get('/tbh', function(){
    return view('tbh_kate');
});

Route::get('/cari/{id}', function ($id){
    $kate = DB::table('blog')->where('id_ktg', $id)->get();
    $tit = DB::table('category')->where('id', $id)->get();
    return view('tampil_kate', ['kate'=>$kate, 'tit'=>$tit]);
})->name('kate');

Route::get('/blog/export_excel', 'BlogController@export_excel');

Route::get('/blog/cetak_pdf', 'BlogController@cetak_pdf');

Route::get('galery/json', 'GalleryController@json');

Route::get('/transaction', 'TransactionController');

Route::get('/kirimemail', 'EmailController@index');

Route::get('/get_user', 'HomeController@get_user');