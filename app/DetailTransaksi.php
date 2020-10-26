<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksis';
    protected $guarded = [];

    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'id_user', 'id');
    // }

    public function transaksi()
    {
        return $this->belongsTo('App\Transaksi', 'id_transaksi', 'id');
    }
    
    public function detailUser()
    {
        return $this->belongsTo('App\DetailUser', 'kode_kelas', 'kode_kelas');
    }
}
