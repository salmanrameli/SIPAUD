@extends('layouts.layout-tu')

@section('header')
    Registrasi Guru
    @endsection

@section('content')
    <div class="col-lg-12">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('guru.register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">ID</label>

                <div class="col-md-6">
                    <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" required autofocus>

                    @if ($errors->has('id'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label for="nama" class="col-md-4 control-label">Nama</label>

                <div class="col-md-6">
                    <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                    @if ($errors->has('nama'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                <label for="alamat" class="col-md-4 control-label">Alamat</label>

                <div class="col-md-6">
                    <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                    @if ($errors->has('alamat'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                <label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                <div class="col-md-6">
                    {{ Form::radio('jenis_kelamin', 'Laki-Laki', true) }}
                    {{ Form::label('jenis_kelamin', 'Laki-Laki', ['class' => 'control-label']) }}<br>
                    {{ Form::radio('jenis_kelamin', 'Perempuan') }}
                    {{ Form::label('jenis_kelamin', 'Perempuan', ['class' => 'control-label']) }}
                    @if ($errors->has('jenis_kelamin'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                <label for="telepon" class="col-md-4 control-label">Nomor Telepon</label>

                <div class="col-md-6">
                    <input id="telepon" type="text" class="form-control" name="telepon" value="{{ old('telepon') }}" required autofocus>

                    @if ($errors->has('telepon'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                <label for="tanggal_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                <div class="col-md-6">
                    <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autofocus>

                    @if ($errors->has('tanggal_lahir'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tahun_masuk') ? ' has-error' : '' }}">
                <label for="tahun_masuk" class="col-md-4 control-label">Tahun Masuk</label>

                <div class="col-md-6">
                    <input id="tahun_masuk" type="text" class="form-control" name="tahun_masuk" value="{{ old('tahun_masuk') }}" required autofocus>

                    @if ($errors->has('tahun_masuk'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('tahun_masuk') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                <label for="jabatan" class="col-md-4 control-label">Jabatan</label>

                <div class="col-md-6">
                    {{ Form::radio('jabatan', 'Guru', true) }}
                    {{ Form::label('jabatan', 'Guru', ['class' => 'control-label']) }}<br>
                    {{--{{ Form::radio('jabatan', 'Tata Usaha') }}--}}
                    {{--{{ Form::label('jabatan', 'Tata Usaha', ['class' => 'control-label']) }}<br>--}}
                    {{--{{ Form::radio('jabatan', 'Kepala Sekolah') }}--}}
                    {{--{{ Form::label('jabatan', 'Kepala Sekolah', ['class' => 'control-label']) }}--}}
                    @if ($errors->has('jabatan'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('jabatan') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
