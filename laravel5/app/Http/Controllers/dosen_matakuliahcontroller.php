<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_matakuliahcontroller extends Controller
{
	  public function awal(){
    	return "Hello dari DosenMatakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen_matakuliah = new dosen_matakuliah();
    	$dosen_matakuliah->dosen_id = 11;
    	$dosen_matakuliah->matakuliah_id = 2;
    	$dosen_matakuliah->save();
    	return "Data dosen matakuliah dengan id {$dosen_matakuliah->dosen_id} telah disimpan";
    }
}
