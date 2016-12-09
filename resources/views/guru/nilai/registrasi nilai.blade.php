@extends('layouts.layout-guru')

@section('header')
    Registrasi Nilai Siswa
    @endsection

@section('content')
    <div class="col-lg-12">
        <div class="col-lg-3">
            <a href="{{ route('guru.nilai.1') }}"><button type="button" class="btn btn-default btn-block">Perkembangan Spiritual</button></a><br>
            <a href="{{ route('guru.nilai.2') }}"><button type="button" class="btn btn-default btn-block">Perkembangan Estetik</button></a><br>
            <a href="{{ route('guru.nilai.3') }}"><button type="button" class="btn btn-default btn-block">Perkembangan Afeksi</button></a><br>
            <a href="{{ route('guru.nilai.4') }}"><button type="button" class="btn btn-default btn-block">Perkembangan Kognisi</button></a><br>
            <a href="{{ route('guru.nilai.5') }}"><button type="button" class="btn btn-default btn-block">Perkembangan Bahasa</button></a><br>
            <a href="{{ route('guru.nilai.6') }}"><button type="button" class="btn btn-default btn-block">Perkembangan Fisik</button></a><br>
            <a href="{{ route('guru.nilai.7') }}"><button type="button" class="btn btn-default btn-block">Perkembangan Sosial</button></a><br>
        </div>
    </div>

    @endsection