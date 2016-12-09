@extends('layouts.layout-kepsek')

@section('header')
    Detail Guru: {{ $guru->nama }}
@endsection

@section('content')
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $guru->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $guru->nama }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $guru->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $guru->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $guru->alamat }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>{{ $guru->telepon }}</td>
        </tr>
        <tr>
            <th>E-Mail</th>
            <td>{{ $guru->email }}</td>
        </tr>
        <tr>
            <th>Tahun Masuk</th>
            <td>{{ $guru->tahun_masuk }}</td>
        </tr>
    </table>
@endsection