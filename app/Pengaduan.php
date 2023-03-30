<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    public $timestamps = false;
    protected $table = 'pengaduans';
    protected $fillable = ['tgl_pengaduan','nik','isi_laporan','foto','status'];
    protected $primaryKey = 'id_pengaduan';

    public function pengaduan ()
    {
        return $this->hasMany('App\Pengaduan','id_pengaduan','id_pengaduan');
    }

    public function tanggapan()
    {
        return $this->hasMany('App\Tanggapan','id_tanggapan');
    }

    public function user()
    {
        return $this->belongsTo('App\User','nik','nik');
    }
}
