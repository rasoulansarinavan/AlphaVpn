<div class="layout-px-spacing">
    @push('link')
        <link rel="stylesheet" type="text/css" href="/admin/src/assets/css/dark/forms/switches.css">
        <link href="/admin/src/plugins/css/dark/pricing-table/css/component.css" rel="stylesheet" type="text/css"/>
    @endpush
    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('client.profile.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pricing Table</li>
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
                                            <p>Family VPN</p>
                                        </div>

                                        <div class="pricing-header-pricing">

                                            <p class="pricing yearly-pricing" style="font-size: 28px"> {{$products[0]->price}}</p>
                                            <p class="sub-title monthly-pricing-label" style="letter-spacing: 4px">USDT</p>
                                        </div>
                                    </div>

                                    <div class="pricing-plan-features mb-4">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> Unlimited Volume
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>Android
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> IOS
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>Windows
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 1 Month
                                                Update
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 1 Month
                                                Support
                                            </li>

                                        </ul>
                                    </div>
                                    <a wire:click="buy('{{$products[0]->id}}')" href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
                                        Started</a>
                                </div>
                                <!-- Plan -->
                                <div class="pricing-plan mb-5 recommanded" style="min-width: 23%">

                                    <span class="badge badge-pill badge-warning show"><span style="font-size: 18px">9</span> USDT Off</span>

                                    <div class="pricing-header-section">
                                        <div class="pricing-header">
                                            <h3>{{$products[1]->type->name}}</h3>
                                            <p>Family VPN</p>
                                        </div>

                                        <div class="pricing-header-pricing">

                                            <p class="pricing yearly-pricing" style="font-size: 28px"> {{$products[1]->price}}</p>
                                            <p class="sub-title monthly-pricing-label" style="letter-spacing: 4px">USDT</p>
                                        </div>
                                    </div>

                                    <div class="pricing-plan-features mb-4" >
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> Unlimited Volume
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>Android
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> IOS
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>Windows
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 2 Months
                                                Update
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 2 Months
                                                Support
                                            </li>
                                        </ul>
                                    </div>
                                    <a wire:click="buy('{{$products[1]->id}}')" href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
                                        Started</a>
                                </div>
                                <!-- Plan -->
                                <div class="pricing-plan mb-5" style="min-width: 23%" >

                                    <span class="badge badge-pill badge-warning show"><span style="font-size: 18px">8</span> USDT Off</span>

                                    <div class="pricing-header-section">
                                        <div class="pricing-header">
                                            <h3>{{$products[2]->type->name}}</h3>
                                            <p>Family VPN</p>
                                        </div>

                                        <div class="pricing-header-pricing">

                                            <p class="pricing yearly-pricing" style="font-size: 28px"> {{$products[2]->price}}</p>
                                            <p class="sub-title monthly-pricing-label" style="letter-spacing: 4px">USDT</p>
                                        </div>
                                    </div>

                                    <div class="pricing-plan-features mb-4">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> Unlimited Volume
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>Android
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> IOS
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span>Windows
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 3 Months
                                                Update
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 3 Month
                                                Support
                                            </li>
                                        </ul>
                                    </div>
                                    <a wire:click="buy('{{$products[2]->id}}')" href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
                                        Started</a>
                                </div>

                            </div>



                        </div>

                    </div>
                </div>
            </div>



        </div>

    </div>
    @push('script')
        <script>
            var getSwithchInput = document.querySelector('#toggle-1');
            var pricingContainer = document.querySelector('.pricing-plans-container')

            getSwithchInput.addEventListener('change', function () {
                var isChecked = getSwithchInput.checked;
                if (isChecked) {
                    pricingContainer.classList.add('billed-yearly');

                    pricingContainer.querySelectorAll('.badge').forEach(element => {
                        element.classList.add('show')
                    });

                } else {
                    pricingContainer.classList.remove('billed-yearly')
                    pricingContainer.querySelectorAll('.badge').forEach(element => {
                        element.classList.remove('show')
                    });
                }
            })
        </script>
    @endpush
</div>
