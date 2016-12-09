@extends('layouts.layout-guru')

@section('header')
    Lihat Siswa
@endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            @foreach($hasil as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td><div class="pull-right">
                            <a href="{{ route('guru.siswa.show', ['id' => $siswa->id]) }}"><button type="button" class="btn btn-default">Lihat Siswa</button></a>
                        </div></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection