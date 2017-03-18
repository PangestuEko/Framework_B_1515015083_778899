<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahcontroller extends Controller
{
     public function awal(){
    	return "Hello dari JadwalMatakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$jadwal_matakuliah = new jadwal_matakuliah();
    	$jadwal_matakuliah->mahasiswa_id = 2;
    	$jadwal_matakuliah->ruangan_id = 2;
    	$jadwal_matakuliah->dosen_matakuliah_id = 2;
    	$jadwal_matakuliah->save();
    	return "Data jadwal matakuliah telah disimpan";
    }
}