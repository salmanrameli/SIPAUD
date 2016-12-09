<?php

namespace App\Http\Controllers;

use App\nilai_siswa;
use App\pelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class NilaiSiswaController extends Controller
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
        return view('guru.nilai.registrasi nilai');
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
            'id' => 'required',
            'id_guru' => 'required',
            'nomor_induk' => 'required',
            'nilai' => 'required'
        ]);

        $nilai = $request->all();

        nilai_siswa::create($nilai);

        Session::flash('flash_message', 'Nilai berhasil disimpan');

        return redirect()->route('guru.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = DB::table('nilai_siswa')->where('nomor_induk', '=', $id)->get();

        return view('tu.pengelolaan nilai.detail nilai')->with('hasil', $siswa);
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

    public function create_1()
    {
        $pelajaran = pelajaran::findorFail('1');

        return view('guru.nilai.nilai_1')->with('pelajaran', $pelajaran);
    }

    public function create_2()
    {
        $pelajaran = pelajaran::findorFail('2');

        return view('guru.nilai.nilai_2')->with('pelajaran', $pelajaran);
    }

    public function create_3()
    {
        $pelajaran = pelajaran::findorFail('3');

        return view('guru.nilai.nilai_3')->with('pelajaran', $pelajaran);
    }

    public function create_4()
    {
        $pelajaran = pelajaran::findorFail('4');

        return view('guru.nilai.nilai_4')->with('pelajaran', $pelajaran);
    }

    public function create_5()
    {
        $pelajaran = pelajaran::findorFail('5');

        return view('guru.nilai.nilai_5')->with('pelajaran', $pelajaran);
    }

    public function create_6()
    {
        $pelajaran = pelajaran::findorFail('6');

        return view('guru.nilai.nilai_6')->with('pelajaran', $pelajaran);
    }

    public function create_7()
    {
        $pelajaran = pelajaran::findorFail('7');

        return view('guru.nilai.nilai_7')->with('pelajaran', $pelajaran);
    }
}
