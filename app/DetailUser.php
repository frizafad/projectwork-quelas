<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    protected $table = 'detail_users';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'kode_kelas', 'kode_kelas');
    }

    public function detail()
    {
        return $this->belongsTo('App\DetailTransaksi', 'id', 'id_detail');
        
    }
}
