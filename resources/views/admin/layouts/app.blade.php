<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>WLF VPN</title>
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
    <link rel="stylesheet" href="/admin/assets/css/toastr.min.css">

    <link rel="stylesheet" href="/admin/src/plugins/src/sweetalerts2/sweetalerts2.css">
    <link href="/admin/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @stack('link')
    @livewireStyles
</head>
<livewire:admin.layouts.header/>
<body class="layout-boxed dark" style="background-image: url(/admin/assets/img/back.jpg);background-size: cover;">

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



<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/admin/assets/js/vendors/jquery-3.6.0.min.js"></script>
<script src="/admin/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
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
<script>
    window.addEventListener('swal:confirm', event => {
        swal({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.livewire.emit('delete', event.detail.id);
                }
            });
    });
</script>
<script src="/admin/assets/js/toastr.min.js"></script>
<script>
    $(document).ready(function () {
        toastr.options = {
            "progressBar": false,
            "positionClass": "toast-bottom-{{app()->getLocale()=='en' ?'right':'left'}}",
            "timeOut": 2000,
        }
    })
    document.addEventListener('success', event => {
        toastr.success(event.detail.message)
        setTimeout(function () {
            //location.reload();
        }, 3000);
        $('.modal').modal('hide');
    })
    document.addEventListener('warning', event => {
        toastr.warning(event.detail.message)
        setTimeout(function () {
            //location.reload();
        }, 3000);
    })
    document.addEventListener('error', event => {
        toastr.error(event.detail.message)
        setTimeout(function () {
            // location.reload();
        }, 3000);
    })
    window.addEventListener('toastr:info', event => {
        toastr.info(event.detail.message);
    });
    window.addEventListener('swal:warning', event => {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: event.detail.text,
            footer: ''
        })
    })
</script>

@stack('script')

@livewireScripts
</body>
</html>
