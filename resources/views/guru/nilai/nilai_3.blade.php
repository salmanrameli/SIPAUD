@extends('layouts.layout-guru')

@section('header')
    Registrasi Nilai: {{ $pelajaran->nama }}
@endsection

@section('content')
    {{ Form::open(['route' => 'guru.nilai.store']) }}

    <div class="form-group">
        {{ Form::label('id', 'ID Pelajaran', ['class' => 'control-label']) }}
        {{ Form::text('id', $pelajaran->id, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('id_guru', 'ID Guru Pengajar', ['class' => 'control-label']) }}
        {{ Form::text('id_guru', $pelajaran->id_guru, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('nomor_induk', 'Nomor Induk Siswa', ['class' => 'control-label']) }}
        {{ Form::text('nomor_induk', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('nilai', 'Nilai Siswa', ['class' => 'control-label']) }}
        {{ Form::text('nilai', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('komentar', 'Komentar Guru', ['class' => 'control-label']) }}
        {{ Form::text('komentar', null, ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Simpan Nilai', ['class' => 'btn btn-success']) }}
    {{ Form::close() }}
@endsection