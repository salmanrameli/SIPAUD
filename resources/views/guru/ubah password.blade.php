@extends('layouts.layout-guru')

@section('header')
    Ubah Password
    @endsection

@section('content')
    {{ Form::model($guru, ['method' => 'PATCH', 'route' => ['guru.update_password', $guru->id]]) }}

    {{--<div class="form-group">--}}
        {{--{{ Form::label('id', 'ID Guru', ['class' => 'control-label']) }}--}}
        {{--{{ Form::text('id', null, ['class' => 'form-control']) }}--}}
    {{--</div>--}}

    <div class="form-group">
        {{ Form::label('password', 'Password', ['class' => 'control-label']) }}
        {{ Form::text('password', null, ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Update Password', ['class' => 'btn btn-success']) }}
    {{ Form::close() }}
    @endsection