@extends('layouts.layout-tu')

@section('header')
    Detail Nilai
@endsection

@section('content')
    <table class="table">
        @foreach($hasil as $nilai)
        <tr>
            <th>ID</th>
            <td>{{ $nilai->id }}</td>
        </tr>
        <tr>
            <th>ID Guru</th>
            <td>{{ $nilai->id_guru }}</td>
        </tr>
        <tr>
            <th>Nomor Induk</th>
            <td>{{ $nilai->nomor_induk }}</td>
        </tr>
        <tr>
            <th>Nilai</th>
            <td>{{ $nilai->nilai }}</td>
        </tr>
            <tr>
                <th>Komentar</th>
                <td>{{ $nilai->komentar }}</td>
            </tr>
        <tr>
            <th><br></th>
            <td><br></td>
        </tr>
        @endforeach
    </table>
    {{--<div class="pull-right">--}}
        {{--{{ Form::open(['method' => 'DELETE', 'route' => ['guru.destroy', $nilai->id]]) }}--}}

        {{--{{ Form::submit('Hapus Guru?', ['class' => 'btn btn-danger']) }}--}}

        {{--{{ Form::close() }}--}}
        {{--<br>--}}
    {{--</div>--}}
@endsection