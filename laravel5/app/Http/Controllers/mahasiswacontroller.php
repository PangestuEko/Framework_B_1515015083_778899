<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use App\Http\Requests;

// use App\Mahasiswa;

// class MahasiswaController extends Controller
// {
//     public function awal(){
//     	return "Hello dari MahasiswaController";
//     }
//     public function tambah(){
//     	return $this->simpan();
//     }
//     public function simpan(){
//     	$mahasiswa = new Mahasiswa();
//     	$mahasiswa->nama = "Ika Wahyuningsih";
//     	$mahasiswa->nim = "1515001021";
//     	$mahasiswa->alamat = "JL. Pramuka 5A";
//     	$mahasiswa->pengguna_id = 3;
//     	$mahasiswa->save();
//     	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
       // return "Hallo Dunia"; //1

        // $mahasiswa = mahasiswa::all(); //2
        //dd($mahasiswa);

        $mahasiswa = mahasiswa::find(2); //3

        echo "Nama :".$mahasiswa->nama;
        echo "<br>";
        echo "Username :".$mahasiswa->pengguna->username;
    }
}

