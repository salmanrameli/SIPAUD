@extends('layouts.layout-tu')

@section('header')
    Dashboard
    @endsection

@section('content')
    <div class="col-lg-12">
        <h3>Welcome, {{ $user->nama }}</h3>
        Hak akses: {{ $user->jabatan }}<br><br>

        {{--<ul class="nav nav-tabs nav-justified">--}}
            {{--<li class="active"><a data-toggle="tab" href="#menu1">Pelajaran</a></li>--}}
            {{--<li><a data-toggle="tab" href="#menu2">Guru</a></li>--}}
            {{--<li><a data-toggle="tab" href="#menu3">Tata Usaha</a></li>--}}
            {{--<li><a data-toggle="tab" href="#menu4">Siswa</a></li>--}}
        {{--</ul>--}}

        {{--<div class="tab-content">--}}
            {{--<div id="menu1" class="tab-pane fade in active">--}}
                {{--<h3>Pengelolaan Pelajaran</h3>--}}
                {{--<p>Some content in menu 1.</p>--}}
            {{--</div>--}}
            {{--<div id="menu2" class="tab-pane fade">--}}
                {{--<h3>Pengelolaan Guru</h3>--}}
                {{--<br>--}}

            {{--</div>--}}
            {{--<div id="menu3" class="tab-pane fade">--}}
                {{--<h3>Pengelolaan Tata Usaha</h3>--}}
                {{--<br>--}}

            {{--</div>--}}
            {{--<div id="menu4" class="tab-pane fade">--}}
                {{--<h3>Pengelolaan Siswa</h3>--}}
                {{--<br>--}}

            {{--</div>--}}
        {{--</div>--}}
    </div>

@endsection
