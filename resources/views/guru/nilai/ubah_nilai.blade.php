@extends('layouts.layout-guru')

@section('header')
    Nilai Siswa
@endsection

@section('content')
    {{ Form::model($nilai, ['method' => 'PATCH', 'route' => ['guru.nilai.update', $nilai->id, $nilai->nomor_induk]]) }}

    <div class="col-lg-12">
        <div class="form-group">
            {{ Form::label('id', 'ID Pelajaran', ['class' => 'control-label']) }}
            {{ Form::text('id', $nilai->id, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('id_guru', 'ID Guru Pengajar', ['class' => 'control-label']) }}
            {{ Form::text('id_guru', $nilai->id_guru, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('nomor_induk', 'Nomor Induk Siswa', ['class' => 'control-label']) }}
            {{ Form::text('nomor_induk', $nilai->nomor_induk, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('nilai', 'Nilai Siswa', ['class' => 'control-label']) }}
            {{ Form::text('nilai', $nilai->nilai, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('komentar', 'Komentar Guru', ['class' => 'control-label']) }}
            {{ Form::text('komentar', $nilai->komentar, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Ubah Nilai', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection