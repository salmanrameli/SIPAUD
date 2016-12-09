@extends('layouts.layout-tu')

@section('header')
    Pengelolaan Data Siswa
    @endsection

@section('content')
    {{ Form::open(['route' => 'tu.siswa.store']) }}

    <div class="form-group">
        {{ Form::label('id', 'Nomor Induk', ['class' => 'control-label']) }}
        {{ Form::text('id', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('nama', 'Nama Siswa', ['class' => 'control-label']) }}
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
        {{ Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'control-label']) }}<br>
        {{ Form::input('date', 'tanggal_lahir', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Lahir']) }}
    </div>

    <div class="form-group">
        {{ Form::label('alamat', 'Alamat Siswa', ['class' => 'control-label']) }}
        {{ Form::text('alamat', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('angkatan', 'Angkatan', ['class' => 'control-label']) }}
        {{ Form::text('angkatan', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('nama_ayah', 'Nama Ayah', ['class' => 'control-label']) }}
        {{ Form::text('nama_ayah', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('pekerjaan_ayah', 'Pekerjaan Ayah', ['class' => 'control-label']) }}
        {{ Form::text('pekerjaan_ayah', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('no_telp_ayah', 'Nomor Telepon Ayah', ['class' => 'control-label']) }}
        {{ Form::text('no_telp_ayah', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('nama_ibu', 'Nama Ibu', ['class' => 'control-label']) }}
        {{ Form::text('nama_ibu', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('pekerjaan_ibu', 'Pekerjaan Ibu', ['class' => 'control-label']) }}
        {{ Form::text('pekerjaan_ibu', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('no_telp_ibu', 'Nomor Telepon Ibu', ['class' => 'control-label']) }}
        {{ Form::text('no_telp_ibu', null, ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Register siswa', ['class' => 'btn btn-success']) }}

    {{ Form::close() }}

    @endsection