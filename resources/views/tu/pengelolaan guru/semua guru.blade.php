@extends('layouts.layout-tu')

@section('header')
    Pengelolaan Guru
    @endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            @foreach($hasil as $guru)
                <tr>
                    <td>{{ $guru->nama }}</td>
                    <td><div class="pull-right">
                            <a href="{{ route('tu.guru.show', ['id' => $guru->id]) }}"><button type="button" class="btn btn-default">Lihat Guru</button></a>
                            <a href="{{ route('guru.edit', ['id' => $guru->id]) }}"><button type="button" class="btn btn-info">Ubah Data</button></a>
                        </div></td>
                </tr>
                @endforeach
        </table>
    </div>
    @endsection