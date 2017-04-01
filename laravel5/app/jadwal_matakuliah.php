<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_matakuliah extends Model
{
   protected $table = 'jadwal_matakuliah';
   protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

   public function mahasiswa(){
    	return $this->belongsTo(Mahasiswa::class);
   }
   public function ruangan(){
    	return $this->belongsTo(Ruangan::class);
   }
   public function Dosen_MataKuliah(){
    	return $this->belongsTo(DosenMataKuliah::class);
   }
   
}

//Table jadwal_matakuliah berelasi dengan atau milik mahasiswa, dan ruangan, juga dosenmatakuliah