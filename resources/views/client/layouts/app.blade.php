<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="/admin/src/assets/img/favicon.ico"/>
    <link href="/admin/layouts/modern-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/layouts/modern-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css"/>
    <script src="/admin/layouts/modern-dark-menu/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/admin/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="/admin/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="/admin/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @stack('link')
    @livewireStyles
</head>
<livewire:client.layouts.header/>
<body class="layout-boxed dark">

<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <div class="sidebar-wrapper sidebar-theme">
        <livewire:client.layouts.side-bar/>
    </div>

    <div id="content" class="main-content">


        @yield('content')

        <livewire:client.layouts.footer/>
    </div>
</div>

@livewireScripts

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/admin/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/admin/src/plugins/src/mousetrap/mousetrap.min.js"></script>
<script src="/admin/src/plugins/src/waves/waves.min.js"></script>
<script src="/admin/layouts/modern-dark-menu/app.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="/admin/src/plugins/src/apex/apexcharts.min.js"></script>
<script src="/admin/src/assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

@stack('script')
</body>
</html>
