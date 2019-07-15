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

Route::get('/beranda', function () {
    return view('admin');
});


// //ADMIN
// Route::get('/beranda','AdminController@index')->name('beranda');
// Route::get('/datauser','AdminController@datauser')->name('datauser');
// Route::get('/tambahuser','AdminController@tambahuser')->name('tambahuser');
// Route::get('/datarumah','RumahController@datarumah')->name('datarumah');
// Route::get('/tambahrumah','Controller@tambahrumah')->name('tambahrumah');
// Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
// Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
// Route::get('/pesan', 'PesanController@index')->name('pesan');
// Route::get('/get-pesan', 'PesanController@pesan')->name('get-pesan');

//USERS
Route::get('/home','HomeController@index')->name('home');
Auth::routes();

Route::get('/beranda','AdminController@index')->name('beranda');


Route::get('rumah', 'RumahController@index')->name('rumah');
Route::get('rumah/create','RumahController@create')->name('rumah.create');
Route::post('rumah/create','RumahController@store')->name('rumah.store');
Route::get('/detail/{rumah}','RumahController@show')->name('rumah.show');
Route::get('/rumah/edit/{id}', 'RumahController@edit')->name('rumah.edit');
Route::get('/rumah/update/{id}', 'RumahController@update')->name('rumah.update');
Route::get('/rumah/destroy/{id}', 'RumahController@destroy')->name('rumah.destroy');




Route::get('/anggota', 'AnggotaController@index')->name('anggota');
Route::post('/anggota/create', 'AnggotaController@create')->name('anggota.create');
Route::get('/anggota/edit/{anggota}', 'AnggotaController@edit')->name('anggota.edit');
Route::post('/anggota/update/{anggota}', 'AnggotaController@update')->name('anggota.update');
Route::get('/anggota/delete/{anggota}', 'AnggotaController@delete')->name('anggota.delete');




