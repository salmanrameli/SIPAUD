@extends('layouts.layout-tu')

@section('header')
    Pengelolaan Pelajaran
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="col-lg-3">
            <a href="{{ route('tu.pelajaran.register') }}"><button type="button" class="btn btn-default btn-block">Registrasi Pelajaran</button></a>
            <br>
            <a href="{{ route('tu.semua_pelajaran') }}"><button type="button" class="btn btn-default btn-block">Semua Pelajaran</button></a>
        </div>
    </div>
@endsection