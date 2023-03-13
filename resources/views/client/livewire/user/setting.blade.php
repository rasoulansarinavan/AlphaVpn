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
        <link href="/admin/src/assets/css/dark/users/user-profile.css" rel="stylesheet" type="text/css"/>
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

        <div class="row layout-spacing ">
            <!-- Content -->
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="">Profile</h3>
                        </div>
                        <div class="text-center user-info">
                            <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" alt="avatar">
                            <p class="">{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                        </div>
                        <div class="user-info-list">

                            <div class="">
                                <ul class="contacts-block list-unstyled">

                                    <li class="contacts-block__item">
                                        <a href="mailto:example@mail.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-mail me-3">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                            {{\Illuminate\Support\Facades\Auth::user()->email}}</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <div class="section general-info payment-info">
                            <div class="info">
                                <h6 class="">Payment Method</h6>
                                <div class="list-group mt-4">
                                    <label class="list-group-item">
                                        @foreach($wallets as $wallet)
                                            <div class="d-flex w-100">
                                                <div class="billing-radio me-2">
                                                    <div class="form-check">
                                                        <input checked class="form-check-input" type="radio"
                                                               name="paymentMethod" id="paymentMethod1">
                                                    </div>
                                                </div>
                                                <div class="billing-content">
                                                    <div class="fw-bold">USDT Address Wallet</div>
                                                    <p>{{$wallet->address_wallet}}</p>
                                                </div>
                                                <div class="billing-edit align-self-center ms-auto">
                                                    <button type="button"
                                                            wire:click="editWallet('{{$wallet->id}}')"
                                                            class="btn btn-dark">Edit
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </label>
                                </div>
                                <form
                                    wire:submit.prevent="saveAddressWallet(Object.fromEntries(new FormData($event.target)))">

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="address_wallet">Address
                                                        Wallet</label>
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
                                        <button type="submit" class="btn btn-secondary mt-4 add-payment">Save
                                        </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
