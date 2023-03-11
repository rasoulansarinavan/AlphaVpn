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
    @endpush

    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">@lang('account-setting.Users')</a></li>
                    <li class="breadcrumb-item active"
                        aria-current="page">@lang('account-setting.Account Settings')</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">
                <div class="row mb-3">
                    <div class="col-md-12" wire:ignore>
                        <h2>@lang('account-setting.Settings')</h2>

                        <ul class="nav nav-pills" id="animateLine" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab"
                                        href="#animated-underline-home" role="tab"
                                        aria-controls="animated-underline-home" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                    Home
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab"
                                        href="#animated-underline-profile" role="tab"
                                        aria-controls="animated-underline-profile" aria-selected="false" tabindex="-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-dollar-sign">
                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                    @lang('account-setting.Payment Details')
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="animateLineContent-4">
                    <div class="tab-pane fade show active" id="animated-underline-home" wire:ignore.self role="tabpanel"
                         aria-labelledby="animated-underline-home-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form class="section general-info">
                                    <div class="info">
                                        <h6 class="">General Information</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="profile-image  mt-4 pe-md-4">

                                                            <!-- // The classic file input element we'll enhance
                                                            // to a file pond, we moved the configuration
                                                            // properties to JavaScript -->

                                                            <div class="img-uploader-content">
                                                                <input type="file" class="filepond"
                                                                       name="filepond"
                                                                       accept="image/png, image/jpeg, image/gif"/>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Full Name</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                               id="fullName" placeholder="Full Name"
                                                                               value="Jimmy Turner">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="profession">Profession</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                               id="profession" placeholder="Designer"
                                                                               value="Web Developer">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="country">Country</label>
                                                                        <select class="form-select mb-3" id="country">
                                                                            <option>All Countries</option>
                                                                            <option selected>United States</option>
                                                                            <option>India</option>
                                                                            <option>Japan</option>
                                                                            <option>China</option>
                                                                            <option>Brazil</option>
                                                                            <option>Norway</option>
                                                                            <option>Canada</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="address">Address</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                               id="address" placeholder="Address"
                                                                               value="New York">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="location">Location</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                               id="location" placeholder="Location">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="phone">Phone</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                               id="phone"
                                                                               placeholder="Write your phone number here"
                                                                               value="+1 (530) 555-12121">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="email">Email</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                               id="email"
                                                                               placeholder="Write your email here"
                                                                               value="Jimmy@gmail.com">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="website1">Website</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                               id="website1" placeholder="Enter URL">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12 mt-1">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="" id="customCheck1">
                                                                        <label class="form-check-label"
                                                                               for="customCheck1">Make this my default
                                                                            address</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12 mt-1">
                                                                    <div class="form-group text-end">
                                                                        <button class="btn btn-secondary">Save</button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="animated-underline-profile" wire:ignore.self role="tabpanel"
                         aria-labelledby="animated-underline-profile-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info payment-info">
                                    <div class="info">
                                        <h6 class="">@lang('account-setting.Payment Method')</h6>
                                        <p>@lang('account-setting.Change your Address Wallet')</p>
                                        <div class="list-group mt-4">
                                            <label class="list-group-item">
                                                @foreach($wallets as $wallet)
                                                    <div class="d-flex w-100">
                                                        <div class="billing-radio me-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                       name="paymentMethod" id="paymentMethod1">
                                                            </div>
                                                        </div>
                                                        <div class="billing-content">
                                                            <div
                                                                class="fw-bold">@lang('account-setting.Address Wallet')</div>
                                                            <p>{{$wallet->address_wallet}}</p>
                                                        </div>
                                                        <div class="billing-edit align-self-center ms-auto">
                                                            <button type="button"
                                                                    wire:click="editWallet('{{$wallet->id}}')"
                                                                    class="btn btn-dark">@lang('btn.Edit')
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </label>
                                        </div>
                                        <form
                                            wire:submit.prevent="saveAddressWallet(Object.fromEntries(new FormData($event.target)))">
                                            <div class="info">
                                                <h6 class="">@lang('account-setting.Add Wallet Address')</h6>
                                                <div class="row mt-4">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                   for="address_wallet">@lang('account-setting.Address Wallet')</label>
                                                            <input value="{{$address_wallet}}"
                                                                   class="form-control add-payment-method-input col-md-12 @error('address_wallet') error-input-border  @enderror"
                                                                   name="address_wallet" id="address_wallet"
                                                                   type="text">
                                                            @foreach ($errors->get('address_wallet') as $message)
                                                                <span wire:loading.remove
                                                                      class=" text-danger w-100 d-block mt-2">{{$message}}</span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                        class="btn btn-secondary mt-4 add-payment">@lang('btn.Add Address Wallet')
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
