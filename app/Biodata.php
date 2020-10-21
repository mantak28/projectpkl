<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $primaryKey= 'id_peserta';
    protected $fillable = ['nama_peserta','jenis_kelamin','no_tlpn','tempat_lahir','tgl_lahir', 'jurusan','foto_peserta','id_instansi','id_agama'];
    public $timestamps = false;
    protected $with= ['instansi','masapkl'];
    protected $guarded = [];

    public function instansi()
    {
        return $this->belongsTo('App\Instansi','id_instansi','id_instansi');
    }
    public function masapkl()
    {
        return $this->hasOne('App\Masapkl','id_peserta','id_peserta');
    }
    public function agama()
    {
        return $this->hasOne('App\Agama','id_agama','id_agama');
    }

    
}
