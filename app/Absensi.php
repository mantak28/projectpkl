<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $primaryKey= 'id_absensi';
    public $table = 'absensis';
    protected $fillable = ['waktu_datang','waktu_plg','id_peserta'];
    public $timestamps = false;
    // protected $with= ['biodata'];
    // protected $guarded = [];

    // public function biodata()
    // {
    //     return $this->hasOne('App\Biodata','id_peserta','id_peserta');
    // }
}
