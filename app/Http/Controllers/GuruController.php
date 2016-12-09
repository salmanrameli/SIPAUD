<?php

namespace App\Http\Controllers;

use App\nilai_siswa;
use App\pelajaran;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class GuruController extends Controller
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
        return view('guru.home')->with('user', $auth);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $guru = new User();

        $guru->id = $request->id;
        $guru->password = bcrypt($request->password);
        $guru->nama = $request->nama;
        $guru->alamat = $request->alamat;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->telepon = $request->telepon;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->email = $request->email;
        $guru->tahun_masuk = $request->tahun_masuk;
        $guru->jabatan = $request->jabatan;

        $guru->save();

        Session::flash('flash_message', 'Guru berhasil didaftarkan');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = User::findorFail($id);

        return view('tu.pengelolaan guru.detail guru')->with('guru', $guru);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = User::findorFail($id);

        return view('tu.pengelolaan guru.ubah guru')->with('guru', $guru);
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
        $guru = User::findorFail($id);

        $input = $request->all();

        $guru->fill($input)->save();

        Session::flash('flash_message', 'Guru berhasil diubah');

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
        $guru = User::findorFail($id);

        $guru->delete();

        Session::flash('flash_message', 'Guru berhasil dihapus dari sistem');

        return redirect()->route('tu.home');
    }

    public function viewAllGuru()
    {
        $guru = DB::table('users')->where('Jabatan', '=', 'Guru')->get();

        return view('tu.pengelolaan guru.semua guru')->with('hasil', $guru);
    }

    public function getProfile()
    {
        $guru = Auth::user();

        return view('guru.profile')->with('profil', $guru);
    }

    public function viewAllSiswa()
    {
        $siswa = Siswa::all();

        return view('guru.siswa.semua siswa')->with('hasil', $siswa);
    }

    public function showSiswa($id)
    {
        $siswa = Siswa::findorFail($id);

        return view('guru.siswa.detail siswa')->with('siswa', $siswa);
    }

    public function ubahPassword()
    {
        $guru = Auth::user();

        return view('guru.ubah password')->with('guru', $guru);
    }

    public function updatePassword(Request $request, $id)
    {
        $guru = User::findorFail($id);

        $input = $request->password();

        $guru->fill(bcrypt($input))->save();

        Session::flash('flash_message', 'Password berhasil diubah');

        return redirect()->route('guru.home');
    }

    public function lihatPelajaran()
    {
        $pelajaran = pelajaran::all();

        return view('guru.pelajaran.semua pelajaran')->with('hasil', $pelajaran);
    }

    public function viewAllNilai()
    {
        $siswa = Siswa::all();

        return view('guru.nilai.semua siswa')->with('hasil', $siswa);
    }

    public function detailNilai($id)
    {
        $siswa = DB::table('nilai_siswa')->where('nomor_induk', '=', $id)->get();

        return view('guru.nilai.detail nilai')->with('hasil', $siswa);
    }

    public function ubahNilai()
    {
        $siswa = nilai_siswa::all();

        return view('guru.nilai.ubah.all');
    }
}
