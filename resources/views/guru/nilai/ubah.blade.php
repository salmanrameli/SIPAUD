@extends('layouts.layout-guru')

@section('header')
    Nilai Siswa
@endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            @foreach($hasil as $nilai)
                <tr>
                    <td>{{ $nilai->nama }}</td>
                    <td><div class="pull-right">
                            <a href="{{ route('guru.nilai.edit_nilai', ['id' => $nilai->id, 'siswa' => $nilai->nomor_induk]) }}"><button type="button" class="btn btn-default">Ubah Nilai</button></a>
                        </div></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection