<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
	return view('welcome');
});


// Route::get('hello-world', function () {
//     return 'Hello World';
// });


// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return "Hello-world dari $pengguna" ;
// });


// Route::get('kelas_b/framework/{mhs?}', function ($mhs="Anonim") {
//     return 'Selamat Datang $mhs';
// });

Route::get('Pengguna','PenggunaController@awal');
Route::get('Pengguna/tambah','PenggunaController@tambah');

Route::get('Dosen','dosencontroller@awal');
Route::get('Dosen/tambah','dosencontroller@tambah');

Route::get('Mahasiswa','mahasiswacontroller@awal');
Route::get('Mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('Ruangan','ruangancontroller@awal');
Route::get('Ruangan/tambah','ruangancontroller@tambah');

Route::get('Matakuliah','matakuliahcontroller@awal');
Route::get('Matakuliah/tambah','matakuliahcontroller@tambah');

Route::get('Dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('Dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');

Route::get('Jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
Route::get('Jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
