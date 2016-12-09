<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Informasi Yaa Bunayya</title>

        <!-- Bootstrap Core CSS -->
        {{--<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
        <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.css') }}">


        <!-- MetisMenu CSS -->
        <!--<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">-->
        <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/metisMenu.min.css') }}">

        <!-- Custom CSS -->
        <!--<link href="../dist/css/sb-admin-2.css" rel="stylesheet">-->
        <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/sb-admin-2.css') }}">

        <!-- Custom Fonts -->
        <!--<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
        <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/font-awesome.min.css') }}">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Sistem Informasi Yaa Bunayya</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li><a href="{{ route('kepsek.profile') }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="{{ url('/logout') }}">
                            <i class="fa fa-sign-out fa-fw"></i> Logout
                        </a>
                    </li>
                </ul>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <!-- <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                </div>
                            </li> -->
                            <li>
                                <a href="{{ route('kepsek.home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('kepsek.siswa') }}"><i class="fa fa-child fa-fw"></i> Lihat Rekapitulasi Data Siswa</a>
                            </li>
                            <li>
                                <a href="{{ route('kepsek.guru') }}"><i class="fa fa-users fa-fw"></i> Lihat Rekapitulasi Data Guru</a>
                            </li>
                            <li>
                                <a href="{{ route('kepsek.nilai.all') }}"><i class="fa fa-book fa-fw"></i> Lihat Laporan Nilai Siswa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('header')</h1>
                    </div>
                </div>
                <div class="row">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    @if(Session::has('flash_message'))
                        <br>
                        <div class="alert alert-success">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif

                    @yield('content')
                    <br><br>
                </div>
            </div>

        </div>

        <!-- jQuery -->
        <!--<script src="../../../public/bootstrap/dist/login/jquery/jquery.min.js"></script>-->
        <script src="{{ asset('bootstrap/dist/login/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <!--<script src="../../../public/bootstrap/dist/login/bootstrap.min.js"></script>-->
        <script src="{{ asset('bootstrap/dist/login/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <!--<script src="../../../public/bootstrap/dist/login/metisMenu.min.js"></script>-->
        <script src="{{ asset('bootstrap/dist/login/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <!--<script src="../vendor/raphael/raphael.min.js"></script>-->
        <!--<script src="../../../public/bootstrap/dist/css/raphael.min.js"></script>-->
        <script src="{{ asset('bootstrap/dist/login/raphael.min.js') }}"></script>

        <!--<script src="../vendor/morrisjs/morris.min.js"></script>-->
        <!--<script src="../../../public/bootstrap/dist/css/morris.min.js"></script>-->
        <script src="{{ asset('bootstrap/dist/login/css/morris.min.js') }}"></script>

        <!--<script src="../data/morris-data.js"></script>-->
        <!--<script src="../../../public/bootstrap/dist/css/morris-data.js"></script>-->
        <script src="{{ asset('bootstrap/dist/login/css/morris-data.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <!--<script src="../../../public/bootstrap/dist/login/sb-admin-2.js"></script>-->
        <script src="{{ asset('bootstrap/dist/login/sb-admin-2.js') }}"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
