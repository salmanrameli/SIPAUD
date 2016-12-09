@extends('layouts.layout-tu')

@section('header')
    Pengelolaan Siswa
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="col-lg-3">
            <a href="{{ route('tu.registrasi_siswa') }}"><button type="button" class="btn btn-default btn-block">Registrasi Siswa</button></a>
            <br>
            <a href="{{ route('tu.semua_siswa') }}"><button type="button" class="btn btn-default btn-block">Lihat Siswa</button></a>
        </div>
    </div>
@endsection