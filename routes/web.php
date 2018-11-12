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

Auth::routes();
Route::get('/aa', function(){
	return view('layouts/super');
});
Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function(){
	Route::resource('jurusan','JurusanController');
	Route::resource('ruangan','RuanganController');
		Route::resource('pelajaran','PelajaranController');
		Route::resource('guru','GuruController');
		Route::resource('kelas','KelasController');

		Route::resource('jadwal','JadwalController');
		Route::resource('user','UserController');
		
		
	
  });
Route::group(['middleware'=>['auth','role:guru|admin']], function(){
	
		Route::resource('siswa','SiswaController');
		Route::resource('nilai','NilaiController');
		Route::resource('absensi','AbsensiController');
		Route::get('/filter/kelas/{id}', 'AbsensiController@filter');
		Route::get('/laporanabsensi','LaporanController@index');
		Route::post('/laporanabsensi2','LaporanController@rekap');
		Route::get('/filter/kelas/{id}', 'NilaiController@filter');
	
  });
Route::group(['middleware'=>['auth','role:karyawan|admin']], function(){
	
		Route::resource('pembayaran','PembayaranController');
		Route::get('/laporanpembayaran','RekapController@index');
		Route::post('/laporan/pembayaran1','RekapController@index2');
		Route::post('/laporanpembayaran/detail2','RekapController@index3');

		Route::get('/filter/kelasa/{id}', 'PembayaranController@filter');
	
  });

