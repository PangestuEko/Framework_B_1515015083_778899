<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
	protected $table = 'ruangan';
    // protected $fillable = ['title'];
    public function JadwalMataKuliah(){
    	return $this->hasMany(JadwalMataKuliah::class);
    }
}

//table ruangan berelasi one to many dengan model jadwamatakuliah
