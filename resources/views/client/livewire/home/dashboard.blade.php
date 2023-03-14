<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('client.profile.dashboard')}}">Dashboard</a></li>

                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->
        <div class="row layout-top-spacing">

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-card-five" style="height: 100%">
                    <div class="widget-content">
                        <div class="account-box">

                            <div class="info-box">
                                <div class="icon">
                                                <span>
                                                    <img src="/admin/src/assets/img/money-bag.png" alt="money-bag">
                                                </span>
                                </div>

                                <div class="balance-info">
                                    <h6>Total Balance</h6>
                                    <h2 class="d-flex align-items-center mt-2 justify-content-around"><span class="me-2"
                                                                                                            style="font-size: 20px">USDT</span><b>{{$wallet_total}}</b>
                                    </h2>
                                    <div class="card-bottom-section justify-content-end" style="margin-top:0">

                                        <a href="{{route('client.profile.wallet-index')}}" class="">View Report</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  position-relative mt-1 " wire:ignore.self>

                                <label for="clipboard" class="mt-2 mb-2">Referral code</label>
                                <textarea style="{{$referral?'':' filter: blur(1px);'}}" class="form-control mb-2  "
                                          id="clipboard" readonly
                                          disabled>{{$referral?route('client.register').'/?referral='.\Illuminate\Support\Facades\Auth::user()->referral:'"Before recommending our services to others, we suggest you try them out for yourself first."'}}</textarea>
                                <div class="position-absolute copy"
                                     onclick="copyToClipboard('#clipboard')"
                                     style="top: 61px;right: 13px;color: #fff;cursor: pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-copy">
                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                        <path
                                            d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-card-three">
                    <div class="widget-content">
                        <div class="account-box">
                            <div class="info">
                                <div class="inv-title">
                                    <h5 class="">Total Balance</h5>
                                </div>
                                <div class="inv-balance-info">
                                    <p class="inv-balance">$ 41,741.42</p>
                                    <span class="inv-stats balance-credited">+ 2453</span>
                                </div>
                            </div>
                            <div class="acc-action">
                                <div class="">
                                    <a href="javascript:void(0);" class="btn-wallet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                                </div>
                                <a href="javascript:void(0);" class="btn-add-balance">Add Balance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row widget-statistic">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-followers widget-card-five">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">0</p>
                                        <h5 class="">Followers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-referral widget-card-five ">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-link">
                                            <path
                                                d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                            <path
                                                d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">0</p>
                                        <h5 class="">Referral</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-one widget-card-five">
                    <div class="widget-heading">
                        <h5 class="">Transactions</h5>
                        <div class="task-action">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                </a>

                                <div class="dropdown-menu left" aria-labelledby="pendingTask" style="will-change: transform;">
                                    <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Electricity Bill</h4>
                                        <p class="meta-date">04 Jan 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-dec">
                                    <p><span>-$16.44</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list t-info">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="avatar">
                                            <span class="avatar-title">SP</span>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Shaun Park</h4>
                                        <p class="meta-date">10 Jan 1:00PM</p>
                                    </div>
                                </div>
                                <div class="t-rate rate-inc">
                                    <p><span>+$36.11</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="avatar">
                                            <span class="avatar-title">AD</span>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Amy Diaz</h4>
                                        <p class="meta-date">31 Jan 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-inc">
                                    <p><span>+$66.44</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list t-secondary">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Netflix</h4>
                                        <p class="meta-date">02 Feb 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-dec">
                                    <p><span>-$32.00</span></p>
                                </div>
                            </div>
                        </div>


                        <div class="transactions-list t-info">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="avatar">
                                            <span class="avatar-title">DA</span>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Daisy Anderson</h4>
                                        <p class="meta-date">15 Feb 1:00PM</p>
                                    </div>
                                </div>
                                <div class="t-rate rate-inc">
                                    <p><span>+$10.08</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="avatar">
                                            <span class="avatar-title">OG</span>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Oscar Garner</h4>
                                        <p class="meta-date">20 Feb 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-dec">
                                    <p><span>-$22.00</span></p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>--}}



        </div>

    </div>
    @push('script')
        <script>
            function copyToClipboard(element) {

                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text()).select();
                document.execCommand("copy");
                $temp.remove();


                @if(!$referral)
                Swal.fire({
                    title: '"Before recommending our services to others, we suggest you try them out for yourself first."',
                    icon: 'warning',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Lets go!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = '/profile/pricing-table'
                    }
                })

                @else

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Copied',
                    showConfirmButton: false,
                    timer: 1500
                })
                @endif
            }


        </script>
    @endpush

</div>
