<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    // protected $fillable = ['nama','nip','alamat','pengguna_id'];
    public function pengguna(){
    	return $this->belongsTo(Pengguna::class);
    }
    
    public function dosen_matakuliah(){
    	return $this->hasMany(DosenMataKuliah::class);
    }
}

//Tulisan hijau hanya dapat menggunakan penulisan sembarang, asal saat pemanggilan dapat dilakukan dan sesuai. Tulisan biru menunjukkan nama model, dan penggunaan belongsto artinya model ini adalah relasi dari pengguna dan hasMany artinya one to many dimana ada relasi ke model dosenmatakuliah
