<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transaksi;
use App\DetailTransaksi;
use App\DetailUser;
use App\User;
use App\Kelas;

class AnggotaController extends Controller
{
    public function index(){
        $kodeKelas = Auth::user()->detailUser()->first();

        $kelas = Kelas::where('kode_kelas', $kodeKelas->kode_kelas)->first();
        $user1 = DetailUser::where('kode_kelas', $kodeKelas->kode_kelas)
                            ->where('users.absen', '>=', '1')
                            ->join('users', 'detail_users.id_user', '=', 'users.id')
                            ->get();
        $user2 = $user1 -> sortBy('user.absen');
        $kas = DetailTransaksi::where('kode_kelas', $kodeKelas->kode_kelas)->get();

        return view('anggota.index',['kelas' => $kelas, 'user2' => $user2, 'kas' => $kas, ]);
    }

    public function profile()
    {
        $kodeKelas = Auth::user()->detailUser()->first();
        $userdetail = DetailUser::where('kode_kelas', $kodeKelas->kode_kelas)->first();
        // dd($userdetail);
        return view('anggota.profile', ['user' => $userdetail]);
    }
    public function acak()
    {
        return view('anggota.acak');
    }

    public function postAcak(Request $req)
    {
        $jmlBangku   = $req->jumlahBangku;
        $jmlBarisHorizontal   = $req->jumlahBaris;
        $jmlBarisVertical = $jmlBangku / $jmlBarisHorizontal;
        
        return view('anggota.acak', compact(['jmlBangku', 'jmlBarisHorizontal', 'jmlBarisVertical']));
    }

    public function editprofile()
    {
        $kodeKelas = Auth::user()->detailUser()->first();
        $user = User::where('id', $kodeKelas->id_user)->first();
        $kelas = Kelas::where('kode_kelas', $kodeKelas->kode_kelas)->first();
        return view('anggota.editprofile', ['user' => $user, 'kelas' => $kelas]);
    }

    public function postEdit(Request $request)
    {   
        $auth = Auth::user()->detailUser()->first();

        $user = User::where('id', $auth->id_user)->first();
        $kelas = Kelas::where('kode_kelas', $auth->kode_kelas)->first();

        $user->nama = $request->nama;
        $user->absen = $request->absen;

        $user->save();
        $kelas->save();
        return redirect('/anggota/profile');
    }
}
