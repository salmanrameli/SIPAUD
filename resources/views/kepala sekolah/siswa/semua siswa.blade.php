@extends('layouts.layout-kepsek')

@section('header')
    Lihat Siswa
@endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>Nomor Induk</th>
                <th>Nama Siswa</th>
                <th>Tanggal Lahir</th>
                <th>Angkatan</th>
            </tr>
            @foreach($hasil as $siswa)
                <tr>
                    <td>{{ $siswa->id }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                    <td>{{ $siswa->angkatan }}</td>
                    <td><div class="pull-right">
                            <a href="{{ route('kepsek.siswa.show', ['id' => $siswa->id]) }}"><button type="button" class="btn btn-default">Lihat Siswa</button></a>
                        </div></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection