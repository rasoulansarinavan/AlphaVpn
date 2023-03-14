<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title>Vipi</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="/admin/layouts/modern-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/layouts/modern-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css"/>
    {{-- <script src="/admin/layouts/modern-dark-menu/loader.js"></script>--}}

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/admin/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="/admin/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="/admin/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/admin/assets/css/toastr.min.css">
    <link href="/admin/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">

    <link href="/admin/src/plugins/css/dark/pricing-table/css/component.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/admin/src/plugins/src/sweetalerts2/sweetalerts2.css">
    <link href="/admin/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css"/>


    <link href="/admin/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="/admin/src/assets/css/dark/dashboard/dash_2.css" rel="stylesheet" type="text/css"/>

    <link href="/admin/src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/admin/src/assets/css/dark/elements/alert.css">

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @stack('link')
    @livewireStyles
</head>


<body class="layout-boxed dark" style="background-image: url(/admin/assets/img/back.jpg);background-size: cover;">


<livewire:client.layouts.header/>

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
            footer: '',
            confirmButtonText: 'OK'
        })
    })
    //warning for pricing table
    window.addEventListener('swal:pricing', event => {
        Swal.fire({

            text: event.detail.text,
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Lets go to balance!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = '/profile/wallet-details'
            }
        })
    })

    window.addEventListener('swal:confirm', event => {
        Swal.fire({
            title: event.detail.title,
            text: '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.livewire.emit('buy', event.detail.id);
                setTimeout(
                    function()
                    {
                        window.location = '/profile/orders'
                    }, 1000)
            }
        })
    })
    window.addEventListener('swal:saveAddressWalletAlert', event => {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: event.detail.message,
            showConfirmButton: false,
            timer: 1500
        })
    })

</script>

<script>
    $('.sidebarCollapse').on('click', function () {
        $('#container').toggleClass('sbar-open')
        $('.overlay').toggleClass('show')
        $('.sidebar-wrapper.sidebar-theme').css('background','#0e1726')
    });

</script>


@stack('script')
</body>
</html>
