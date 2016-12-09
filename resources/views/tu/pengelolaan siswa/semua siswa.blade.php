@extends('layouts.layout-tu')

@section('header')
    Pengelolaan Siswa
@endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            @foreach($hasil as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td><div class="pull-right">
                            <a href="{{ route('tu.siswa.show', ['id' => $siswa->id]) }}"><button type="button" class="btn btn-default">Lihat Siswa</button></a>
                            <a href="{{ route('tu.siswa.edit', ['id' => $siswa->id]) }}"><button type="button" class="btn btn-info">Ubah Data</button></a>
                        </div></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection