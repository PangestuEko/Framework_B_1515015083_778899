<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal(){
    	return "Hello dari DosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new dosen();
    	$dosen->nama = "Pangestu Eko Laksono";
    	$dosen->nip = "64003151219970001";
    	$dosen->alamat = "St.Mountreal, Los Angles";
    	$dosen->pengguna_id = 2;
    	$dosen->save();
    	return "Data dosen dengan nama {$dosen->nama} telah disimpan";
    }
}
