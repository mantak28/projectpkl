<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    protected $primaryKey= 'id_lembaga';
    protected $fillable = ['nama_lembaga'];
    public $timestamps = false;
}
