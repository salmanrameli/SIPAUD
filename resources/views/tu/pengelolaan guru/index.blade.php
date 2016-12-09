@extends('layouts.layout-tu')

@section('header')
    Pengelolaan Guru
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="col-lg-3">
            <a href="{{ route('tu.registrasi_guru') }}"><button type="button" class="btn btn-default btn-block">Registrasi Guru</button></a>
            <br>
            <a href="{{ route('tu.semua_guru') }}"><button type="button" class="btn btn-default btn-block">Lihat Guru</button></a>
        </div>
    </div>
@endsection