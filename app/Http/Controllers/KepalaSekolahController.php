<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Siswa;
use Illuminate\Support\Facades\DB;

class KepalaSekolahController extends Controller
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
        return view('kepala sekolah.home')->with('user', $auth);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getProfile()
    {
        $user = Auth::user();

        return view('kepala sekolah.profile')->with('profil', $user);
    }

    public function viewAllSiswa()
    {
        $siswa = Siswa::all();

        return view('kepala sekolah.siswa.semua siswa')->with('hasil', $siswa);
    }

    public function showSiswa($id)
    {
        $siswa = Siswa::findorFail($id);

        return view('kepala sekolah.siswa.detail siswa')->with('siswa', $siswa);
    }

    public function viewAllGuru()
    {
        //$guru = DB::table('users')->where('Jabatan', '=', 'Guru')->get();
        $guru = DB::table('users')->where('Jabatan', '!=', 'Kepala Sekolah')->get();

        return view('kepala sekolah.guru.semua guru')->with('hasil', $guru);
    }

    public function showGuru($id)
    {
        $guru = User::findorFail($id);

        return view('kepala sekolah.guru.detail guru')->with('guru', $guru);
    }

    public function viewAllNilai()
    {
        $siswa = Siswa::all();

        return view('kepala sekolah.nilai.semua siswa')->with('hasil', $siswa);
    }

    public function detailNilai($id)
    {
        $siswa = DB::table('nilai_siswa')->where('nomor_induk', '=', $id)->get();

        return view('kepala sekolah.nilai.detail nilai')->with('hasil', $siswa);
    }
}
