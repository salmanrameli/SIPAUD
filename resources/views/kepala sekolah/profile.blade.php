@extends('layouts.layout-kepsek')

@section('header')
    Profil Diri
@endsection

@section('content')
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $profil->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $profil->nama }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $profil->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $profil->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $profil->alamat }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>{{ $profil->telepon }}</td>
        </tr>
        <tr>
            <th>E-Mail</th>
            <td>{{ $profil->email }}</td>
        </tr>
        <tr>
            <th>Tahun Masuk</th>
            <td>{{ $profil->tahun_masuk }}</td>
        </tr>
    </table>
@endsection