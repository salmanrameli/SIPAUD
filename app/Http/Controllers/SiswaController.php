<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;
use App\nilai_siswa;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tu.pengelolaan siswa.registrasi siswa');
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
            'id' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'angkatan' => 'required',
            'nama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'no_telp_ayah' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'no_telp_ibu' => 'required',
        ]);

        $siswa = new Siswa();

        $siswa->id = $request->id;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
        $siswa->angkatan = $request->angkatan;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
        $siswa->no_telp_ayah = $request->no_telp_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
        $siswa->no_telp_ibu = $request->no_telp_ibu;

        $siswa->save();

        Session::flash('flash_message', 'Siswa berhasil didaftarkan');

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
        $siswa = Siswa::findorFail($id);

        return view('tu.pengelolaan siswa.detail siswa')->with('siswa', $siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findorFail($id);

        return view('tu.pengelolaan siswa.ubah siswa')->with('siswa', $siswa);
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
        $siswa = Siswa::findorFail($id);

        $input = $request->all();

        $siswa->fill($input)->save();

        Session::flash('flash_message', 'Siswa berhasil diubah');

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
        $siswa = Siswa::findorFail($id);

        $siswa->delete();

        Session::flash('flash_message', 'Siswa berhasil dihapus dari sistem');

        return redirect()->route('tu.home');
    }

    public function viewAllSiswa()
    {
        $siswa = Siswa::all();

        return view('tu.pengelolaan nilai.semua siswa')->with('hasil', $siswa);
    }
}
