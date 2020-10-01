<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LembagaPendidikan extends Model
{
    public $table = 'lembagapendidikans';
    protected $fillable = ['nama_lembaga','jenis_lembaga'];
    public $timestamps = false;
}
