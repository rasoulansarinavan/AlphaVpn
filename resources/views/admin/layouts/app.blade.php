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
    <link href="/admin/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @livewireStyles
</head>
<livewire:admin.layouts.header/>
<body class="layout-boxed dark">

<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <div class="sidebar-wrapper sidebar-theme">
        <livewire:admin.layouts.side-bar/>
    </div>

    <div id="content" class="main-content">


        @yield('content')

        <livewire:admin.layouts.footer/>
    </div>
</div>

@livewireScripts

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/admin/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/admin/src/plugins/src/mousetrap/mousetrap.min.js"></script>
<script src="/admin/src/plugins/src/waves/waves.min.js"></script>
<script src="/admin/layouts/vertical-light-menu/app.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="/admin/src/plugins/src/apex/apexcharts.min.js"></script>
<script src="/admin/src/assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
     style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004"
          d="M-1 514.8733355964661L-1 514.8733355964661C-1 514.8733355964661 77.85724431818183 514.8733355964661 77.85724431818183 514.8733355964661C77.85724431818183 514.8733355964661 155.71448863636365 514.8733355964661 155.71448863636365 514.8733355964661C155.71448863636365 514.8733355964661 233.57173295454547 514.8733355964661 233.57173295454547 514.8733355964661C233.57173295454547 514.8733355964661 311.4289772727273 514.8733355964661 311.4289772727273 514.8733355964661C311.4289772727273 514.8733355964661 389.2862215909091 514.8733355964661 389.2862215909091 514.8733355964661C389.2862215909091 514.8733355964661 467.14346590909093 514.8733355964661 467.14346590909093 514.8733355964661C467.14346590909093 514.8733355964661 545.0007102272727 514.8733355964661 545.0007102272727 514.8733355964661C545.0007102272727 514.8733355964661 622.8579545454546 514.8733355964661 622.8579545454546 514.8733355964661C622.8579545454546 514.8733355964661 700.7151988636364 514.8733355964661 700.7151988636364 514.8733355964661C700.7151988636364 514.8733355964661 778.5724431818182 514.8733355964661 778.5724431818182 514.8733355964661C778.5724431818182 514.8733355964661 856.4296875 514.8733355964661 856.4296875 514.8733355964661C856.4296875 514.8733355964661 856.4296875 514.8733355964661 856.4296875 514.8733355964661 "></path>
</svg>
</body>
</html>
