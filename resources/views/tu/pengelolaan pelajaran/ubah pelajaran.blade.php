@extends('layouts.layout-tu')

@section('header')
    Ubah Pelajaran: {{ $pelajaran->nama }}
@endsection

@section('content')
    {{ Form::model($pelajaran, ['method' => 'PATCH', 'route' => ['pelajaran.update', $pelajaran->id]]) }}

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

    {{ Form::submit('Ubah Pelajaran', ['class' => 'btn btn-success']) }}
    {{ Form::close() }}
@endsection