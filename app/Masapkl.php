<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masapkl extends Model
{
    protected $primaryKey= 'id_masapkl';
    protected $fillable = ['awal_masuk','akhir_masuk','status','id_peserta'];
    public $timestamps = false;
}

