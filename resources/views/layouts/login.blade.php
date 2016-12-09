<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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

@yield('content')

<!-- jQuery -->
<script src="../../../public/bootstrap/dist/login/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<!--<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>-->
<script src="../../../public/bootstrap/dist/login/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<!--<script src="../vendor/metisMenu/metisMenu.min.js"></script>-->
<script src="../../../public/bootstrap/dist/login/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<!--<script src="../dist/js/sb-admin-2.js"></script>-->
<script src="../../../public/bootstrap/dist/login/sb-admin-2.js"></script>


</body>

</html>
