@extends('layouts.layout-guru')

@section('header')
    Nilai Siswa
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="form-group">
            {{ Form::label('id', 'ID Pelajaran', ['class' => 'control-label']) }}
            {{ Form::text('id', $nilai->id, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('id', 'ID Pelajaran', ['class' => 'control-label']) }}
            {{ Form::text('id', $nilai->id_guru, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('id', 'ID Pelajaran', ['class' => 'control-label']) }}
            {{ Form::text('id', $nilai->nomor_induk, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('id', 'ID Pelajaran', ['class' => 'control-label']) }}
            {{ Form::text('id', $nilai->nilai, ['class' => 'form-control']) }}
        </div>
    </div>
@endsection