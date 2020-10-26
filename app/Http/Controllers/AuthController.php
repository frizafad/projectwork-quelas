<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Kelas;
use App\DetailUser;

class AuthController extends Controller
{
    // Index Tampilan Login
    public function indexLogin(){
        return view('login');
    }

    // Proses Pengecekan Login
    public function checkLogin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'walikelas') {
                return redirect('/walikelas');
            } 
            else if (Auth::user()->role == 'pengurus') {
                return redirect('/pengurus');
            }
            else if (Auth::user()->role == 'anggota'){
                return redirect('/anggota');
            }
        } 
        else {
            return redirect('/login')->with('alert-fail','Username atau password salah!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('alert-logout','Berhasil Logout!');
    }

    public function indexRegister()
    {
        return view('register');
    }

    function checkRegister(Request $request){
        User::insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role = 'walikelas',
        ]);
        Kelas::insert([
            'nama_kelas' => $request->nama_kelas,
            'kode_kelas' => $request->kode_kelas,
        ]);

        $user = User::where('email',$request->email)->first();
        $kelas = Kelas::where('kode_kelas',$request->kode_kelas)->first();

        $detailUser = DetailUser::insert([
            'id_user'=> $user->id,
            'kode_kelas'=> $kelas->kode_kelas,
        ]);
      
        return redirect('/login');
      }
}
