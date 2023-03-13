<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Vipi | The VPN that just works</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="/admin/layouts/modern-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/layouts/modern-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css"/>
    <script src="/admin/layouts/modern-dark-menu/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/admin/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href="/admin/layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/src/assets/css/light/authentication/auth-cover.css" rel="stylesheet" type="text/css"/>

    <link href="/admin/layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/src/assets/css/dark/authentication/auth-cover.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/admin/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/admin/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />

    <link href="/admin/layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/admin/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="/admin/src/assets/css/light/elements/alert.css">

    <!-- END GLOBAL MANDATORY STYLES -->
    @livewireStyles
</head>
<body class="form" style="background: #060818;background-image: url('/admin/assets/img/back.jpg')">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

@yield('content')

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/admin/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

@livewireScripts
</body>
</html>
