<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>@yield('title') | VATMEX</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="VATSIM México">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="VATMEX es la división mexicana de VATSIM. Nuestro propósito es brindar servicio de control de tránsito aéreo en México, al igual que proveer constante entrenamiento y recursos a controladores y pilotos virtuales que deseen participar en la división.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="/favicon/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="/frontend/css/vendors.min.css"/>
        <link rel="stylesheet" href="/frontend/css/icon.min.css"/>
        <link rel="stylesheet" href="/frontend/css/style.css"/>
        <link rel="stylesheet" href="/frontend/css/responsive.css"/>
        <link rel="stylesheet" href="/frontend/css/vatmex.css" />
        @yield('css')
    </head>
    <body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="">
        <!-- start header navigation -->
        <x-frontend.navbar/>
        <!-- end header navigation -->
        <!-- start content -->
        @yield('content')
        <!-- end content -->
        <!-- start footer -->
        <x-frontend.footer/>
        <!-- end footer -->
        <!-- start sticky elements -->
        <x-frontend.sticky/>
        <!-- end sticky elements -->
         <!-- start scroll progress -->
        <x-frontend.scroll-progress/>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="/frontend/js/jquery.js"></script>
        <script type="text/javascript" src="/frontend/js/vendors.min.js"></script>
        <script type="text/javascript" src="/frontend/js/main.js"></script>
        @yield('js')
    </body>
</html>
