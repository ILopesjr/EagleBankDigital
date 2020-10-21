<!doctype html>
<html lang="pt-br">
<head>
    <title>Eagle Bank Digital</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, name=viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!--  Fonts and icons  -->
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Material Kit CSS -->
    <link href="{{asset('assets/css/material-kit.css?v=2.0.7')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-md bg-success">
    <div class="container">
        <a class="navbar-brand" href="https://www.eaglebankdigital.com/">Eagle Bank Digital</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('users.index')}}">Home</a>
                </li>
            </ul>
            <div class="container">
                <form action="{{route('users.store')}}" class="form-group" method="post">
                    @csrf
                    <label for="userLogin" class="sr-only">Usuário</label>
                    <input type="text" class="form" id="userLogin" name="userLogin" placeholder="Usuário">
                    <button type="submit" class="btn btn-warning btn-sm">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer class="footer footer-default">
    <div class="container">
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            , All rights reserved Ivanildo Lopes
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>
</body>
</html>
