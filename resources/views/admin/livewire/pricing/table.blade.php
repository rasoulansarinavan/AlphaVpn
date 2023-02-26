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
                    <li class="breadcrumb-item"><a href="#">Components</a></li>
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

                            <!-- Billing Cycle  -->
                            <div class="billing-cycle-radios mt-5">

                                <div
                                    class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-label-toggle show">
                                    <div class="input-checkbox">
                                        <span class="switch-chk-label label-left">Monthly</span>
                                        <input class="switch-input" type="checkbox" role="switch" id="toggle-1" checked
                                               onchange="this.checked ? this.closest('.inner-label-toggle').classList.add('show') : this.closest('.inner-label-toggle').classList.remove('show')">
                                        <span class="switch-chk-label label-right">Yearly</span>
                                    </div>
                                </div>

                            </div>

                            <!-- Pricing Plans Container -->
                            <div class="pricing-plans-container mt-5 billed-yearly">
                                <!-- Plan -->
                                <div class="pricing-plan mb-5">

                                    <span class="badge badge-pill badge-warning show">45% Off</span>

                                    <div class="pricing-header-section">
                                        <div class="pricing-header">
                                            <h3>Basic</h3>
                                            <p>Most Popular</p>
                                        </div>

                                        <div class="pricing-header-pricing">
                                            <p class="pricing monthly-pricing">$ 9.50</p>
                                            <p class="pricing yearly-pricing">$ 5.50</p>
                                            <p class="sub-title monthly-pricing-label">Per month</p>
                                        </div>
                                    </div>

                                    <div class="pricing-plan-features mb-4">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 100MB
                                                Storage
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 1 Guests +
                                                2.50 per extra seat
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 100
                                                Automations/mo
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 1 Domains
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 6 Month
                                                Update
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 48 Hours
                                                Support
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
                                        Started</a>
                                </div>
                                <!-- Plan -->
                                <div class="pricing-plan mb-5 recommanded">

                                    <span class="badge badge-pill badge-warning show">45% Off</span>

                                    <div class="pricing-header-section">
                                        <div class="pricing-header">
                                            <h3>Plus</h3>
                                            <p>Recommended</p>
                                        </div>

                                        <div class="pricing-header-pricing">
                                            <p class="pricing monthly-pricing">$ 19.50</p>
                                            <p class="pricing yearly-pricing">$ 9.50</p>
                                            <p class="sub-title monthly-pricing-label">Per month</p>
                                        </div>
                                    </div>

                                    <div class="pricing-plan-features mb-4">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> Unlimited
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 5 Guests +
                                                2 per extra seat
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 1000
                                                Automations/mo
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 5 Domains
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 1 Year
                                                Update
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 24 Hours
                                                Support
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
                                        Started</a>
                                </div>
                                <!-- Plan -->
                                <div class="pricing-plan mb-5">

                                    <span class="badge badge-pill badge-warning show">45% Off</span>

                                    <div class="pricing-header-section">
                                        <div class="pricing-header">
                                            <h3>Business</h3>
                                            <p>Best Value</p>
                                        </div>

                                        <div class="pricing-header-pricing">
                                            <p class="pricing monthly-pricing">$ 29.50</p>
                                            <p class="pricing yearly-pricing">$ 19.50</p>
                                            <p class="sub-title monthly-pricing-label">Per month</p>
                                        </div>
                                    </div>

                                    <div class="pricing-plan-features mb-4">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> Unlimited
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 10 Guests +
                                                5 per extra seat
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 20k
                                                Automations/mo
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 10 Domains
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> 2 Year
                                                Update
                                            </li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" class="feather feather-check"><polyline
                                                            points="20 6 9 17 4 12"></polyline></svg></span> Priority
                                                Support
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
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
