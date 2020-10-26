<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\DetailUser;
use App\User;
use App\DetailTransaksi;

class TransaksiController extends Controller
{
    public function pengurusTransaksi(){

        $kodeKelas = Auth::user()->detailUser()->first();

        $userdetail = DetailTransaksi::where('kode_kelas', $kodeKelas->kode_kelas)->get();

        return view('pengurus.transaksi',['transaksi' => $userdetail]);
    }
    public function walikelasTransaksi(){

        $kodeKelas = Auth::user()->detailUser()->first();

        $userdetail = DetailTransaksi::where('kode_kelas', $kodeKelas->kode_kelas)->get();
        return view('walikelas.transaksi',['transaksi' => $userdetail]);
    }

    public function anggotaTransaksi(){

        $kodeKelas = Auth::user()->detailUser()->first();

        $userdetail = DetailTransaksi::where('kode_kelas', $kodeKelas->kode_kelas)->get();

        return view('anggota.transaksi',['transaksi' => $userdetail]);
    }
}
