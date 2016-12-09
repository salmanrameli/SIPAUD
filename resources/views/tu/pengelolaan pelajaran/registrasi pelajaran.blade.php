@extends('layouts.layout-tu')

@section('header')
    Registrasi Pelajaran
    @endsection

@section('content')
    {{ Form::open(['route' => 'tu.pelajaran.store']) }}

    <div class="form-group">
        {{ Form::label('id', 'ID Pelajaran', ['class' => 'control-label']) }}
        {{ Form::text('id', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('id_guru', 'ID Guru Pengajar', ['class' => 'control-label']) }}
        {{ Form::text('id_guru', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('nama', 'Nama Pelajaran', ['class' => 'control-label']) }}
        {{ Form::text('nama', null, ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Register Pelajaran', ['class' => 'btn btn-success']) }}
    {{ Form::close() }}
    @endsection