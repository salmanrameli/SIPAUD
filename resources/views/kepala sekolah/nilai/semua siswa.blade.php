@extends('layouts.layout-kepsek')

@section('header')
    Nilai Siswa
@endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            @foreach($hasil as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td><div class="pull-right">
                            <a href="{{ route('kepsek.nilai.show', ['id' => $siswa->id]) }}"><button type="button" class="btn btn-default">Lihat Nilai</button></a>
                        </div></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection