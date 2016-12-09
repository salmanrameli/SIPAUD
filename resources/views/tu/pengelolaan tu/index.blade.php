@extends('layouts.layout-tu')

@section('header')
    Pengelolaan Petugas Tata Usaha
    @endsection

@section('content')
    <div class="col-lg-12">
        <div class="col-lg-3">
            <a href="{{ route('tu.create') }}"><button type="button" class="btn btn-default btn-block">Registrasi Petugas TU</button></a>
            <br>
            <a href="{{ route('tu.semua_tu') }}"><button type="button" class="btn btn-default btn-block">Lihat Petugas TU</button></a>
        </div>
    </div>
    @endsection