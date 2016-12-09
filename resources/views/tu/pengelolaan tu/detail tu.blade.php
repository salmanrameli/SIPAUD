@extends('layouts.layout-tu')

@section('header')
    Detail Petugas Tata Usaha: {{ $tu->nama }}
@endsection

@section('content')
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $tu->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $tu->nama }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $tu->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $tu->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $tu->alamat }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>{{ $tu->telepon }}</td>
        </tr>
        <tr>
            <th>E-Mail</th>
            <td>{{ $tu->email }}</td>
        </tr>
        <tr>
            <th>Tahun Masuk</th>
            <td>{{ $tu->tahun_masuk }}</td>
        </tr>
    </table>
    <div class="pull-right">
        {{ Form::open(['method' => 'DELETE', 'route' => ['tu.destroy', $tu->id]]) }}

        {{ Form::submit('Hapus Petugas Tata Usaha?', ['class' => 'btn btn-danger']) }}

        {{ Form::close() }}
        <br>
    </div>
@endsection