@extends('layouts.layout-kepsek')

@section('header')
    Pengelolaan Guru
@endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>ID Guru</th>
                <th>Nama Guru</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Tahun Masuk
            </tr>
            @foreach($hasil as $guru)
                <tr>
                    <td>{{ $guru->id }}</td>
                    <td>{{ $guru->nama }}</td>
                    <td>{{ $guru->jenis_kelamin }}</td>
                    <td>{{ $guru->jabatan }}</td>
                    <td>{{ $guru->tahun_masuk }}</td>
                    <td><div class="pull-right">
                            <a href="{{ route('kepsek.guru.show', ['id' => $guru->id]) }}"><button type="button" class="btn btn-default">Lihat Guru</button></a>
                        </div></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection