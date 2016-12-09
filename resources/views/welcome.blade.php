@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <br><br><br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title text-center">LOGIN</h1>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="text" class="col-lg-2 control-label">ID</label>

                            <div class="col-lg-10">
                                <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-lg-2 control-label">Password</label>

                            <div class="col-lg-10">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5 col-lg-offset-2">
                                <button type="submit" class="btn btn-success btn-lg btn-block">
                                    Login
                                </button>
                                {{--<p><br>Belum punya akun?<a href={{ url('/register') }}> Register</a></p>--}}
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        <div class="col-lg-2"></div>
        </div>
    </div>
</div>
@endsection
