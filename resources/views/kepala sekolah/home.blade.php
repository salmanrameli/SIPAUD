@extends('layouts.layout-kepsek')

@section('header')
    Dashboard
@endsection

@section('content')
    <div class="col-lg-12">
        <h3>Welcome, {{ $user->nama }}</h3>
        Hak akses: {{ $user->jabatan }}<br><br>
    </div>

@endsection
