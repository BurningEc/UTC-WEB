<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Tienda virtual &amp; No found</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" />
</head>

<body class="bg-silver-100">
    <div class="content">
        <h1 class="m-t-20">403</h1>
        <p class="error-title">Acceso restringido</p>
        <p class="m-b-20">Lo siento, No tienes los permisos correctos para acceder a este contenido
            <a class="color-green" href="{{route('home')}}">Volver</a> .</p>

    </div>
    <style>
        .content {
            max-width: 450px;
            margin: 0 auto;
            text-align: center;
        }

        .content h1 {
            font-size: 160px
        }

        .error-title {
            font-size: 22px;
            font-weight: 500;
            margin-top: 30px
        }
    </style>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
<script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
</body>

</html>
