<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

class PenggunaController extends Controller
{
    public function awal()
    {
    	return "Hello dari PenggunaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$pengguna = new pengguna();
    	$pengguna->username = 'aloe_vera';
    	$pengguna->password = 'vera_aloe';
    	$pengguna->save();
    	return "Data dengan Username {$pengguna->username} telah ditambahkan";
    }
}
