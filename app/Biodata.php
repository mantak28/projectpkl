<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $primaryKey= 'id_peserta';
    protected $fillable = ['nama_peserta','agama','jenis_kelamin','no_tlpn','tempat_lahir','tgl_lahir', 'jurusan','foto_peserta','id_lemabagapend'];
    public $timestamps = false;
    protected $with= ['pendidikan','masapkl'];
    protected $guarded = [];

    public function pendidikan()
    {
        return $this->belongsTo('App\LembagaPendidikan','id_lembagapend','id_lembagapend');
    }
    public function masapkl()
    {
        return $this->hasOne('App\Masapkl','id_peserta','id_peserta');
    }

    
}
