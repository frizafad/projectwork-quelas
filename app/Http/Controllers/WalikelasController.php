<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\DetailUser;
use App\DetailTransaksi;
use App\Kelas;

class WalikelasController extends Controller
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

        return view('walikelas.index',['kelas' => $kelas, 'user2' => $user2, 'kas' => $kas, ]);
    }

    public function TambahUser()
    {
        return view('walikelas.tambah');
    }

    public function AddUser(Request $request)
    {
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'absen' => $request->absen,
        ]);

        $userlink = User::where('email',$request->email)->first();
        $kelaslink = Auth::user()->detailUser()->first();

        $detailUser = DetailUser::create([
            'id_user'=> $userlink->id,
            'kode_kelas'=> $kelaslink->kode_kelas,
        ]);

        $user->save();
        $detailUser->save();

        return redirect('/walikelas');
    }

    public function profile()
    {
        $kodeKelas = Auth::user()->detailUser()->first();
        $userdetail = DetailUser::where('kode_kelas', $kodeKelas->kode_kelas)->first();
        // dd($userdetail);
        return view('walikelas.profile', ['user' => $userdetail]);
    }
    
    public function transaksi()
    {
        return view('walikelas.transaksi');
    }

    public function acak()
    {
        return view('walikelas.acak');
    }

    public function postAcak(Request $req)
    {
        $jmlBangku   = $req->jumlahBangku;
        $jmlBarisHorizontal   = $req->jumlahBaris;
        $jmlBarisVertical = $jmlBangku / $jmlBarisHorizontal;
        
        return view('walikelas.acak', compact(['jmlBangku', 'jmlBarisHorizontal', 'jmlBarisVertical']));
    }

    public function editprofile()
    {
        $kodeKelas = Auth::user()->detailUser()->first();
        $user = User::where('id', $kodeKelas->id_user)->first();
        $kelas = Kelas::where('kode_kelas', $kodeKelas->kode_kelas)->first();
        return view('walikelas.editprofile', ['user' => $user, 'kelas' => $kelas]);
    }

    public function postEdit(Request $request)
    {   
        $auth = Auth::user()->detailUser()->first();

        $user = User::where('id', $auth->id_user)->first();
        $kelas = Kelas::where('kode_kelas', $auth->kode_kelas)->first();

        $user->nama = $request->nama;
        $user->absen = $request->absen;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->pengumuman = $request->pengumuman;

        $user->save();
        $kelas->save();
        return redirect('/walikelas/profile');
    }
}