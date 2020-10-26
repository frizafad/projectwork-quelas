<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $guarded = [];

    public function detailTransaksi()
    {
        return $this->belongsTo('App\DetailTransaksi', 'id', 'id_transaksi');
    }
}
