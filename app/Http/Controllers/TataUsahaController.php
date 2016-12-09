<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TataUsahaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = Auth::user();
        return view('tu.home')->with('user', $auth);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tu.pengelolaan tu.registrasi tu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|max:255',
            'password' => 'required|confirmed',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'telepon' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required|email|max:255',
            'tahun_masuk' => 'required',
            'jabatan' => 'required'
        ]);

        $tu = new User();

        $tu->id = $request->id;
        $tu->password = bcrypt($request->password);
        $tu->nama = $request->nama;
        $tu->alamat = $request->alamat;
        $tu->jenis_kelamin = $request->jenis_kelamin;
        $tu->telepon = $request->telepon;
        $tu->tanggal_lahir = $request->tanggal_lahir;
        $tu->email = $request->email;
        $tu->tahun_masuk = $request->tahun_masuk;
        $tu->jabatan = $request->jabatan;

        $tu->save();

        Session::flash('flash_message', 'Petugas TU berhasil didaftarkan');

        return redirect()->route('tu.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tu = User::findorFail($id);

        return view('tu.pengelolaan tu.detail tu')->with('tu', $tu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tu = User::findorFail($id);

        return view('tu.pengelolaan tu.ubah tu')->with('tu', $tu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tu = User::findorFail($id);

        $input = $request->all();

        $tu->fill($input)->save();

        Session::flash('flash_message', 'Petugas berhasil diubah');

        return redirect()->route('tu.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tu = User::findorFail($id);

        $tu->delete();

        Session::flash('flash_message', 'Petugas berhasil dihapus dari sistem');

        return redirect()->route('tu.home');
    }

    public function pengelolaanTU()
    {
        return view('tu.pengelolaan tu.index');
    }

    public function pengelolaanGuru()
    {
        return view('tu.pengelolaan guru.index');
    }

    public function pengelolaanSiswa()
    {
        return view('tu.pengelolaan siswa.index');
    }

    public function pengelolaanPelajaran()
    {
        return view('tu.pengelolaan pelajaran.index');
    }

    public function getProfile()
    {
        $profile = Auth::user();

        return view('tu.profile')->with('profil', $profile);
    }

    public function registrasiGuru()
    {
        return view('tu.pengelolaan guru.registrasi guru');
    }

    public function viewAllTU()
    {
        $tu = DB::table('users')->where('Jabatan', '=', 'Tata Usaha')->get();

        return view('tu.pengelolaan tu.semua tu')->with('hasil', $tu);
    }
}
