<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $primaryKey= 'id_instansi';
    public $table = 'instansis';
    protected $fillable = ['nama_instansi','alamat_instansi','no_tlpn_instansi','email_instansi','id_lembaga'];
    public $timestamps = false;
    protected $with= ['lembaga'];
    protected $guarded = [];

    public function lembaga()
    {
        return $this->belongsTo('App\Lembaga','id_lembaga','id_lembaga');
    }
}
