@extends('layouts.layout-tu')

@section('header')
    Ubah Data Guru: {{ $guru->nama }}
    @endsection

@section('content')
    {{ Form::model($guru, ['method' => 'PATCH', 'route' => ['guru.update', $guru->id]]) }}

    <div class="form-group">
        {{ Form::label('id', 'ID Guru', ['class' => 'control-label']) }}
        {{ Form::text('id', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('nama', 'Nama Guru', ['class' => 'control-label']) }}
        {{ Form::text('nama', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'control-label']) }}<br>
        {{ Form::radio('jenis_kelamin', 'Laki-Laki', true) }}
        {{ Form::label('jenis_kelamin', 'Laki-Laki', ['class' => 'control-label']) }}<br>
        {{ Form::radio('jenis_kelamin', 'Perempuan') }}
        {{ Form::label('jenis_kelamin', 'Perempuan', ['class' => 'control-label']) }}
    </div>

    <div class="form-group">
        {{ Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'control-label']) }}
        {{ Form::input('date', 'tanggal_lahir', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Lahir']) }}
    </div>

    <div class="form-group">
        {{ Form::label('alamat', 'Alamat', ['class' => 'control-label']) }}
        {{ Form::text('alamat', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('telepon', 'Nomor Telepon', ['class' => 'control-label']) }}
        {{ Form::text('telepon', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'E-Mail', ['class' => 'control-label']) }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('tahun_masuk', 'Tahun Masuk', ['class' => 'control-label']) }}
        {{ Form::text('tahun_masuk', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('jabatan', 'Jabatan', ['class' => 'control-label']) }}<br>
        {{ Form::radio('jabatan', 'Guru') }}
        {{ Form::label('jabatan', 'Guru', ['class' => 'control-label']) }}<br>
        {{ Form::radio('jabatan', 'Tata Usaha') }}
        {{ Form::label('jabatan', 'Tata Usaha', ['class' => 'control-label']) }}<br>
        {{ Form::radio('jabatan', 'Kepala Sekolah') }}
        {{ Form::label('jabatan', 'Kepala Sekolah', ['class' => 'control-label']) }}
    </div>

    {{ Form::submit('Update Guru', ['class' => 'btn btn-success']) }}
    {{ Form::close() }}
    @endsection