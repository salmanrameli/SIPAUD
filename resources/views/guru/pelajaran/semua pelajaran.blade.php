@extends('layouts.layout-guru')

@section('header')
    Pelajaran
    @endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>ID Pelajaran</th>
                <th>Nama Pelajaran</th>
                <th>Guru Pengajar</th>
            </tr>
            @foreach($hasil as $pelajaran)
                <tr>
                    <td>{{ $pelajaran->id }}</td>
                    <td>{{ $pelajaran->nama }}</td>
                    <td>{{ $pelajaran->user->nama }}</td>
                    {{--<td><div class="pull-right">--}}
                            {{--<a href="{{ route('kepsek.guru.show', ['id' => $pelajaran->id]) }}"><button type="button" class="btn btn-default">Lihat Guru</button></a>--}}
                        {{--</div></td>--}}
                </tr>
            @endforeach
        </table>
    </div>
    @endsection