<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_matakuliah;

class Dosen_matakuliahController extends Controller
{
     public function awal(){
    	return "Hello dari Dosen matakuliah controller";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen_matakuliah = new Dosen_matakuliah();
    	$dosen_matakuliah->dosen_id = 1;
    	$dosen_matakuliah->matakuliah_id = 1;
    	$dosen_matakuliah->save();
    	return "Data Dosen Matakuliah dengan id Dosen {$dosen_matakuliah->dosen_id} telah disimpan";
    }
     public function dosenmatakuliah(){
        $dosen_matakuliah = dosen_matakuliah::find(2); //3

        echo "Dosen ID :".$dosen_matakuliah->dosen_id;
        echo "<br>";
        echo "Matakuliah ID :".$dosen_matakuliah->matakuliah_id;
    }

}