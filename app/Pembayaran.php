<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    //
     protected $fillable = ['tgl','jumlahbayar','siswa_id','kelas_id'];
     public function siswa()
  {
    	return $this->belongsTo('App\Siswa');
    }
     public function kelas()
  {
    	return $this->belongsTo('App\Kelas');
    }
}
