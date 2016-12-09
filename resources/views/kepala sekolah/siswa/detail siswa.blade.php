@extends('layouts.layout-kepsek')

@section('header')
    Detail Siswa: {{ $siswa->nama }}
@endsection

@section('content')
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $siswa->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $siswa->nama }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $siswa->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $siswa->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $siswa->alamat }}</td>
        </tr>
        <tr>
            <th>Angkatan</th>
            <td>{{ $siswa->angkatan }}</td>
        </tr>
        <tr>
            <th>Nama Ayah</th>
            <td>{{ $siswa->nama_ayah }}</td>
        </tr>
        <tr>
            <th>Pekerjaan Ayah</th>
            <td>{{ $siswa->pekerjaan_ayah }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon Ayah</th>
            <td>{{ $siswa->no_telp_ayah }}</td>
        </tr>
        <tr>
            <th>Nama Ibu</th>
            <td>{{ $siswa->nama_ibu }}</td>
        </tr>
        <tr>
            <th>Pekerjaan Ibu</th>
            <td>{{ $siswa->pekerjaan_ibu }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon Ibu</th>
            <td>{{ $siswa->no_telp_ibu }}</td>
        </tr>
    </table>
@endsection