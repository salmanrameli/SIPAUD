<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelajaran;
use Illuminate\Support\Facades\Session;

class PelajaranController extends Controller
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
        $pelajaran = pelajaran::all();

        return view('tu.pengelolaan pelajaran.semua pelajaran')->with('hasil', $pelajaran);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tu.pengelolaan pelajaran.registrasi pelajaran');
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
            'nama' => 'required'
        ]);

        $input = $request->all();

        pelajaran::create($input);

        Session::flash('flash_message', 'Pelajaran berhasil disimpan');

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
        $pelajaran = pelajaran::findorFail($id);

        return view('tu.pengelolaan pelajaran.detail pelajaran')->with('pelajaran', $pelajaran);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelajaran = pelajaran::findorFail($id);

        return view('tu.pengelolaan pelajaran.ubah pelajaran')->with('pelajaran', $pelajaran);
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
        $pelajaran = pelajaran::findorFail($id);

        $input = $request->all();

        $pelajaran->fill($input)->save();

        Session::flash('flash_message', 'Pelajaran berhasil diubah');

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
        $pelajaran = pelajaran::findorFail($id);

        $pelajaran->delete();

        Session::flash('flash_message', 'Pelajaran berhasil dihapus');

        return redirect()->route('tu.home');
    }
}
