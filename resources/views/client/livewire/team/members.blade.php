<div class="layout-px-spacing">

    @push('link')
        <link href="/admin/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/admin/src/assets/css/dark/elements/alert.css">

        <link href="/admin/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="/admin/src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet"
              type="text/css"/>
        <link rel="stylesheet" type="text/css" href="/admin/src/assets/css/dark/forms/switches.css">
        <link href="/admin/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

        <link href="/admin/src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="/admin/src/plugins/css/dark/table/datatable/dt-global_style.css">
        <link href="/admin/src/assets/css/dark/apps/invoice-list.css" rel="stylesheet" type="text/css"/>
    @endpush

    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a
                            href="{{route('client.profile.dashboard')}}">@lang('side-bar.Dashboard')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('side-bar.My Team')</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">


                <div class="tab-content" id="animateLineContent-4">
                    <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                         aria-labelledby="animated-underline-home-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing layout-spacing m-0">
                                <div class="widget-content widget-content-area br-8">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center " scope="col">@lang('members.Level')</th>
                                                <th class="text-center" scope="col">@lang('members.Total Members')</th>
                                                <th class="text-center" scope="col">@lang('members.Sales')</th>
                                                <th class="text-center" scope="col">@lang('members.Profit')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($team as $item)
                                                <tr>
                                                    <td class="text-center">{{$loop->index+1}}</td>
                                                    <td class="text-center">{{number_format(count($item['members']))}}</td>
                                                    <td class="text-center">{{number_format($item['sale'])}}</td>
                                                    <td class="text-center">

                                                        {{$item['profit']}} %
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                        </svg> {{$item['sale']}} =

                                                        <span style="font-size: 18px"
                                                              class="badge badge-light-success"><b>{{($item['profit']*$item['sale'])/100}}</b></span>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    @push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
                integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/admin/src/plugins/src/table/datatable/datatables.js"></script>
        <script src="/admin/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
        <script src="/admin/src/assets/js/apps/invoice-list.js"></script>
    @endpush
</div>
