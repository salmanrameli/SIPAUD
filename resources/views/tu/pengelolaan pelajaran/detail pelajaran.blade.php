@extends('layouts.layout-tu')

@section('header')
    Detail Pelajaran: {{ $pelajaran->nama }}
    @endsection

@section('content')
    <table class="table">
        <tr>
            <th>ID Pelajaran</th>
            <td>{{ $pelajaran->id }}</td>
        </tr>
        <tr>
            <th>ID Guru Pengajar</th>
            <td> {{ $pelajaran->id_guru }}</td>
        </tr>
        <tr>
            <th>Nama Pelajaran</th>
            <td>{{ $pelajaran->nama }}</td>
        </tr>
    </table>
    <div class="pull-right">
        {{ Form::open(['method' => 'DELETE', 'route' => ['pelajaran.destroy', $pelajaran->id]]) }}

        {{ Form::submit('Hapus Pelajaran?', ['class' => 'btn btn-danger']) }}

        {{ Form::close() }}
        <br>
    </div>
    @endsection