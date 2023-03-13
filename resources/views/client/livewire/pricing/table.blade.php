<div class="layout-px-spacing">
    @push('link')
        <link rel="stylesheet" type="text/css" href="/admin/src/assets/css/dark/forms/switches.css">
        <link href="/admin/src/plugins/css/dark/pricing-table/css/component.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="/admin/src/plugins/src/sweetalerts2/sweetalerts2.css">
        <link href="/admin/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    @endpush
    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('client.profile.dashboard')}}"><span>@lang('side-bar.Dashboard')</span></a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('side-bar.Pricing Table')</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row" id="cancel-row">

            <div class="col-lg-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">

                    <div class="widget-content widget-content-area">

                        <div class="pricing-table-2 ">

                            <!-- Pricing Plans Container -->
                            <div class="pricing-plans-container mt-5 billed-yearly">


                                <!-- Plan -->
                                <div class="pricing-plan mb-5" style="min-width: 23%">

                                    <div class="pricing-header-section">
                                        <div class="pricing-header">
                                            <h3>{{$products[0]->type->name}}</h3>
                                            <p>@lang('pricing-table.Family VPN')</p>
                                        </div>

                                        <div class="pricing-header-pricing">
                                            <p class="pricing yearly-pricing" style="font-size: 28px"> {{$products[0]->price}}</p>
                                            <p class="sub-title monthly-pricing-label" style="letter-spacing: 4px">@lang('pricing-table.USDT')</p>
                                        </div>
                                    </div>

                                    <div class="pricing-plan-features mb-4">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> @lang('pricing-table.Unlimited Volume')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>@lang('pricing-table.Android')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> @lang('pricing-table.IOS')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>@lang('pricing-table.Windows')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 1 @lang('pricing-table.Month Update')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 1 @lang('pricing-table.Month Support')
                                            </li>

                                        </ul>
                                    </div>
                                    <a wire:click="checkWalletBalance('{{$products[0]->id}}')" href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">@lang('btn.Get Started')</a>
                                </div>

                                <!-- Plan -->
                                <div class="pricing-plan mb-5 recommanded" style="min-width: 23%">

                                    <span class="badge badge-pill badge-warning show"><span style="font-size: 18px">{{$products[1]->discount}}</span> @lang('pricing-table.USDT Off')</span>

                                    <div class="pricing-header-section">
                                        <div class="pricing-header">
                                            <h3>{{$products[1]->type->name}}</h3>
                                            <p>@lang('pricing-table.Family VPN')</p>
                                        </div>

                                        <div class="pricing-header-pricing">

                                            <p class="pricing yearly-pricing" style="font-size: 28px"> {{$products[1]->price}}</p>
                                            <p class="sub-title monthly-pricing-label" style="letter-spacing: 4px">@lang('pricing-table.USDT')</p>
                                        </div>
                                    </div>

                                    <div class="pricing-plan-features mb-4" >
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> @lang('pricing-table.Unlimited Volume')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>@lang('pricing-table.Android')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> @lang('pricing-table.IOS')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>@lang('pricing-table.Windows')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 2 @lang('pricing-table.Month Update')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 2 @lang('pricing-table.Month Support')
                                            </li>

                                        </ul>
                                    </div>
                                    <a wire:click="checkWalletBalance('{{$products[1]->id}}')" href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">@lang('btn.Get Started')</a>
                                </div>
                                <!-- Plan -->

                                <div class="pricing-plan mb-5" style="min-width: 23%" >

                                    <span class="badge badge-pill badge-warning show"><span style="font-size: 18px">{{$products[2]->discount}}</span> @lang('pricing-table.USDT Off')</span>

                                    <div class="pricing-header-section">
                                        <div class="pricing-header">
                                            <h3>{{$products[2]->type->name}}</h3>
                                            <p>@lang('pricing-table.Family VPN')</p>
                                        </div>

                                        <div class="pricing-header-pricing">

                                            <p class="pricing yearly-pricing" style="font-size: 28px"> {{$products[2]->price}}</p>
                                            <p class="sub-title monthly-pricing-label" style="letter-spacing: 4px">@lang('pricing-table.USDT')</p>
                                        </div>
                                    </div>

                                    <div class="pricing-plan-features mb-4">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> @lang('pricing-table.Unlimited Volume')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>@lang('pricing-table.Android')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> @lang('pricing-table.IOS')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>@lang('pricing-table.Windows')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 3 @lang('pricing-table.Month Update')
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 3 @lang('pricing-table.Month Support')
                                            </li>

                                        </ul>
                                    </div>
                                    <a wire:click="checkWalletBalance('{{$products[2]->id}}')" href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">@lang('btn.Get Started')</a>
                                </div>

                            </div>



                        </div>

                    </div>
                </div>
            </div>



        </div>

    </div>

</div>
