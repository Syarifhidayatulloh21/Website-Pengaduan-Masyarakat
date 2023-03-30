<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    public $timestamps = false;
    protected $table = 'tanggapans';
    protected $fillable = ['id_pengaduan','tgl_tanggapan','tanggapan','nik'];
    protected $primaryKey = 'id_tanggapan';


    public function pengaduan ()
    {
        return $this->belongsTo('App\Pengaduan','id_pengaduan');
    }

    public function user ()
    {
        return $this->hasMany('App\User','id');
    }
}
