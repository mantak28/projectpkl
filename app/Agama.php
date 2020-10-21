<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $primaryKey= 'id_agama';
    public $table = 'agamas';
    protected $fillable = ['nama_agama'];
    public $timestamps = false;
}
