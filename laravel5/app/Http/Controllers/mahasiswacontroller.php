<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = "Ika Wahyuningsih";
    	$mahasiswa->nim = "1515001012";
    	$mahasiswa->alamat = "St.Franchese, New York";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data mahasiswa dengan nama {$mahasiswa->nama} telah disimpan";
    }
}
