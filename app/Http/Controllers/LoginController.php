<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\User;


class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        // dd(Auth::attempt($request->only('email','password')));
        // dd(Auth::attempt($request->only('email','password')));
        // dd($request->only('email','password'));

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }
        return redirect('logins')->with('alert','Email atau Password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/logins');
    }

    public function register()
    {
        $provinces = Province::all();
        return view('register', compact('provinces'));
    }

    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option>Pilih Kabupaten</option>";

        foreach ($kabupatens as $kabupaten){
            $option .= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }

        echo $option;
    }

    public function getkecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option = "<option>Pilih Kecamatan</option>";

        foreach ($kecamatans as $kecamatan){
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }

    public function getdesa(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Pilih Desa</option>";

        foreach ($desas as $desa){
            $option .= "<option value='$desa->id'>$desa->name</option>";
        }
        echo $option;
    }

    public function simpanregister(Request $request)
    {
        $request->validate([
            'email' => 'unique:users',
            'nik' => 'unique:users',
        ]);
        User::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'jenkel' => $request->jenkel,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kode_pos' => $request->kode_pos,
            'level' => $request->level,
            'province_id' => $request->province_id,
            'regency_id' => $request->regency_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,

        ]);
        // $data_user = new User();
        // $data_user->nik = request()->get('nik');
        // $data_user->nama = request()->get('nama');
        // $data_user->email = request()->get('email');
        // $data_user->password = bcrypt(request()->get('password'));
        // $data_user->telp = request()->get('telp');
        // $data_user->jenkel = request()->get('jenkel');
        // $data_user->level = request()->get('level');
        // $data_user->alamat = request()->get('alamat');
        // $data_user->rt = request()->get('rt');
        // $data_user->rw = request()->get('rw');
        // $data_user->kode_pos = request()->get('kode_pos');
        // $data_user->province_id = request()->get('province_id');
        // $data_user->regency_id = request()->get('regency_id');
        // $data_user->district_id = request()->get('district_id');
        // $data_user->village_id = request()->get('village_id');
        // $data_user->save();

        return redirect()->to('/logins');
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        // dd($user);
        return view('useredit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'level' => 'required',

         ]);
      

          $user = User::find($id);
          $user->status = $request->status;
          $user->save();
          return redirect('pengguna')->with('success','Level Berhasil Ubah');
        
    }





}
