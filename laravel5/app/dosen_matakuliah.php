<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_mataKuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
    
	public function dosen(){
    	return $this->belongsTo(Dosen::class);
    }
    public function matakuliah(){
    	return $this->belongsTo(MataKuliah::class);
    }
    public function Jadwalmatakuliah(){
    	return $this->hasMany(JadwalMataKuliah::class);
    }
   
}

//Table dosen_matakuliah berelasi dari model Dosen dan Matakuliah dan one to many ke model JadwalMatakuliah