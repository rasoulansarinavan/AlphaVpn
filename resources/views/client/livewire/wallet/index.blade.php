<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

        <div class="row layout-top-spacing">


            <div class=" col-md-4  layout-spacing" {{$pendingDeposit==null?'': 'wire:poll.10s'}}>
                <div class="widget widget-card-five" style="background: transparent;border: 1px solid #191e3a">
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
                                    <h1 class="d-flex align-items-center justify-content-around"><span
                                            style="font-size: 20px"
                                            class="me-3">USDT</span><b>{{number_format($balance)}}</b>
                                    </h1>
                                </div>
                            </div>

                            <div class="card-bottom-section row" style="margin-top: 60px">

                                @if(@$pendingDeposit==null)
                                    <div class="simple-pill">

                                        <ul class=" simple-pill nav nav-pills mb-3" id="pills-tab" role="tablist"
                                            wire:ignore>
                                            <li class="nav-item w-50 d-flex justify-content-center" role="presentation">
                                                <button class="nav-link active" id="pills-home-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#pills-home" type="button" role="tab"
                                                        aria-controls="pills-home" aria-selected="true">Deposit
                                                </button>
                                            </li>
                                            <li class="nav-item w-50 d-flex justify-content-center" role="presentation">
                                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-profile" type="button" role="tab"
                                                        aria-controls="pills-profile" aria-selected="false">withdrawal
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" wire:ignore.self id="pills-home"
                                                 role="tabpanel"
                                                 aria-labelledby="pills-home-tab" tabindex="0">
                                                <div class="form-group  position-relative " wire:ignore.self>

                                                    <label for="clipboard" class="mt-2 mb-2">Destination USDT
                                                        Address</label>
                                                    <textarea style="padding-right: 50px;color: #e67980;
    background-color: #2c1c2b;
    border: 1px solid #2c1c2b;"
                                                              class="form-control mb-2  "
                                                              id="clipboard"

                                                              readonly>TH4pz5cBNvcocyaGkfV3KnbwdNxKBXArJD</textarea>
                                                    <div class="position-absolute copy"
                                                         onclick="copyToClipboard('#clipboard')"
                                                         style="top: 61px;right: 13px;color: #fff;cursor: pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-copy">
                                                            <rect x="9" y="9" width="13" height="13" rx="2"
                                                                  ry="2"></rect>
                                                            <path
                                                                d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                        </svg>
                                                    </div>

                                                </div>
                                                <div class="form-group col-12 ">

                                                    <label for="amount" class="mt-1 mb-1">Amount</label>
                                                    <input wire:model="amount"
                                                           class="form-control mb-1 @error('amount') error-input-border  @enderror"
                                                           id="amount"

                                                           maxlength="9">
                                                    @foreach ($errors->get('amount') as $message)
                                                        <span wire:loading.remove
                                                              class=" text-danger w-100 d-block">{{ $message}}</span>
                                                    @endforeach

                                                </div>
                                                <div class="form-group col-12 ">

                                                    <label for="wallet_address" class="mt-2 mb-1">Wallet Address</label>
                                                    <textarea wire:model="wallet_address"
                                                              class="form-control mb-1 @error('wallet_address') error-input-border  @enderror"
                                                              id="wallet_address"

                                                              maxlength="40"></textarea>
                                                    @foreach ($errors->get('wallet_address') as $message)
                                                        <span wire:loading.remove
                                                              class=" text-danger w-100 d-block">{{ $message}}</span>
                                                    @endforeach

                                                </div>
                                                <div class="form-group col-12 " wire:ignore.self>

                                                    <label for="hash" class="mt-2 mb-1">Transaction Hash</label>
                                                    <textarea wire:model="hash"
                                                              class="form-control mb-1 @error('hash') error-input-border  @enderror"
                                                              id="hash"

                                                              maxlength="64" rows="3"></textarea>
                                                    @foreach ($errors->get('hash') as $message)
                                                        <span wire:loading.remove
                                                              class=" text-danger w-100 d-block">{{ $message}}</span>
                                                    @endforeach

                                                </div>

                                                <button
                                                    class="btn btn-danger _effect--ripple waves-effect waves-light mt-3"
                                                    data-bs-toggle="modal" data-bs-target="#slideupModal"
                                                    wire:click="deposit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-plus-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="12" y1="8" x2="12" y2="16"></line>
                                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                                    </svg>
                                                    <span class="btn-text-inner">Deposit</span>
                                                </button>
                                            </div>


                                            <div class="tab-pane fade" id="pills-profile" wire:ignore.self
                                                 role="tabpanel"
                                                 aria-labelledby="pills-profilXe-tab" tabindex="0">
                                                <div class="form-group col-12 ">
                                                    <div
                                                        class="alert alert-light-danger alert-dismissible fade show border-0 mb-1"
                                                        role="alert">

                                                        <ul>
                                                            <li>The minimum amount to withdraw is <b>20
                                                                    USDT</b></li>
                                                            <li>The withdrawal button is activated only on
                                                                <b>Mondays</b></li>
                                                        </ul>

                                                    </div>

                                                    <label for="amount" class="mt-2 mb-1">Amount</label>
                                                    <input wire:model="amount"
                                                           class="form-control mb-1 @error('amount') error-input-border  @enderror"
                                                           id="amount"

                                                           maxlength="9">
                                                    @foreach ($errors->get('amount') as $message)
                                                        <span wire:loading.remove
                                                              class=" text-danger w-100 d-block">{{ $message}}</span>
                                                    @endforeach

                                                </div>
                                                <div class="form-group col-12 ">

                                                    <label for="wallet_address" class="mt-2 mb-1">Wallet Address</label>
                                                    <input wire:model="wallet_address"
                                                           class="form-control mb-1 @error('wallet_address') error-input-border  @enderror"
                                                           id="wallet_address"

                                                           maxlength="40">
                                                    @foreach ($errors->get('wallet_address') as $message)
                                                        <span wire:loading.remove
                                                              class=" text-danger w-100 d-block">{{ $message}}</span>
                                                    @endforeach

                                                </div>

                                                <button
                                                    class="btn btn-success _effect--ripple waves-effect waves-light mt-3"
                                                    {{\Illuminate\Support\Carbon::now()->getTranslatedDayName()=='Monday'?' wire:click=withdrawal':'disabled'}}>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         style="fill: #fff;"
                                                         version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000"
                                                         enable-background="new 0 0 1000 1000" xml:space="preserve">

                                        <g>
                                            <path
                                                d="M406.6,608.2c2.1,2.1,4.2,4.2,10.4,6.2c4.2,2.1,10.4,4.1,16.6,8.3c6.2,2.1,14.5,4.1,22.8,6.2c8.3,2.1,18.7,2.1,27,2.1c0,0,0,0,2.1,0v35.3h35.3v-39.4c2.1,0,4.2,0,4.2-2.1c12.5-4.2,24.9-10.4,33.2-18.7c10.4-8.3,16.6-16.6,22.8-29.1c6.2-12.5,8.3-24.9,8.3-41.5c0-12.5-2.1-22.8-6.2-31.1c-4.2-8.3-8.3-16.6-14.5-22.8c-6.2-6.2-12.5-12.5-20.8-16.6c-8.3-4.1-14.5-8.3-22.8-12.5c-8.3-4.2-14.5-6.2-22.8-10.4c-8.3-4.1-14.5-6.2-20.8-10.4c-6.2-4.1-10.4-8.3-14.5-12.5c-4.2-4.2-6.2-10.4-6.2-16.6c0-4.2,0-8.3,2.1-12.5c2.1-4.2,4.2-8.3,6.2-10.4c4.2-2.1,6.2-4.2,12.5-6.2c4.2-2.1,10.4-2.1,16.6-2.1c8.3,0,16.6,0,22.8,2.1c6.2,2.1,12.5,4.2,18.7,6.2c6.2,2.1,10.4,4.2,12.5,6.2c4.2,2.1,6.2,4.2,8.3,4.2c2.1,0,2.1,0,4.2-2.1c0,0,2.1-2.1,2.1-4.2c0-2.1,0-4.2,2.1-8.3c0-2.1,0-6.2,0-10.4c0-4.1,0-8.3,0-10.4c0-2.1,0-4.1,0-6.2s0-4.1-2.1-4.1c0-2.1-2.1-2.1-2.1-4.2c-2.1-2.1-4.2-4.2-8.3-6.2c-4.2-2.1-10.4-4.2-16.6-6.2c-6.2-2.1-12.5-4.1-18.7-4.1c-2.1,0-2.1,0-4.2,0v-37.4h-35.3v37.4c-6.2,0-12.5,2.1-18.7,4.1c-12.5,4.2-22.8,8.3-31.1,16.6c-8.3,6.2-16.6,16.6-20.8,27c-2.1,12.5-4.2,24.9-4.2,39.4c0,12.5,2.1,22.8,6.2,31.1c4.2,8.3,8.3,16.6,14.5,22.8c6.2,6.2,12.5,12.5,18.7,16.6c8.3,4.2,14.5,8.3,22.8,12.5c8.3,4.2,14.5,6.2,22.8,10.4c8.3,4.2,14.5,6.2,18.7,10.4c6.2,4.2,10.4,8.3,14.5,12.5c4.2,4.2,6.2,10.4,6.2,16.6c0,6.2-2.1,10.4-4.2,16.6c-2.1,4.2-4.2,8.3-8.3,12.5s-8.3,6.2-14.5,8.3c-6.2,2.1-12.5,2.1-18.7,2.1c-10.4,0-20.8-2.1-29.1-4.2c-8.3-2.1-14.5-6.2-20.8-8.3c-6.2-2.1-10.4-6.2-14.5-8.3c-4.2-2.1-6.2-4.2-8.3-4.2c-2.1,0-2.1,0-4.1,2.1c-2.1,0-2.1,2.1-2.1,4.2c0,2.1-2.1,4.1-2.1,8.3s0,6.2,0,12.5s0,12.5,2.1,16.6C404.5,604,404.5,606.1,406.6,608.2L406.6,608.2z M676.4,242.9V81.1c-10.4-49.8-74.7-45.7-89.2,0v161.9H556V45.8c-20.8-47.7-68.5-47.7-89.2,0v197.1h-31.1V79c-18.7-39.4-66.4-49.8-89.2,0v163.9h-31.1V116.4c-14.5-39.4-66.4-51.9-89.2,0v126.6H74.6v462.8h157.7c4.1,157.7,126.6,284.3,276,284.3c149.4,0,269.8-126.6,276-284.3h141.1V242.9H676.4L676.4,242.9z M894.3,680.8H778.1V467.1c-14.5-78.9-66.4-103.8-89.2,0v213.7H99.5V269.9h794.8V680.8L894.3,680.8z"/>
                                        </g>
</svg>
                                                    <span class="btn-text-inner">withdrawal</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    @php

                                        $expiredData = Carbon\Carbon::parse(@$pendingDeposit->created_at)->addMinutes(10)->timestamp;

                                    @endphp
                                    <div class="alert alert-gradient alert-dismissible fade show mb-1 text-center"
                                         role="alert">

                                        <strong>Warning !</strong> You have a <b>Pending</b> transaction!
                                        please wait.
                                        <div id="clock-builder-output" data-countdown="{{$expiredData}}"
                                             style="letter-spacing: 1px;font-weight: 600;font-size: 20px;"
                                             wire:ignore
                                             class=" text-center label label-light mt-2 color-2 d-block clock-builder-output"></div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-8 layout-spacing">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Amount</th>
                            <th scope="col" style="width: 50px;">Info</th>
                            <th class="text-center" scope="col">Type</th>
                            <th class="text-center" scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($wallet  as $item)
                            @php
                                $info='';
                                $background='';
                                     $class='';
                                     if ($item->status=='pending'){
                                         $class='info';
                                     }elseif ($item->status=='confirmed'){
                                         $class='success';

                                     }elseif ($item->status=='rejected'){
                                         $class='danger';
                                     }
                                     if ($item->type=='deposit' || $item->type=='commission'){
                                         $background='rgb(0 255 185 / 15%);';
                                     }elseif ($item->type=='withdraw' || $item->type=='buy'){

                                           $background='rgb(255 0 0 / 15%)';
                                     };
                            @endphp

                            <tr style="background: {{$background}}">

                                <td><h3 class="text-left"><b>{{number_format($item->amount)}}</b>

                                        <span class="d-inline mt-1" style="font-size: 18px">USDT</span>
                                    </h3>
                                    {{$item->created_at}}
                                </td>
                                <td>

                                    @if ($item->type=='buy')
                                        @php
                                            $info = unserialize($item->description);

                                        @endphp
                                        <p> VPN : {{$info['name']}} - {{$info['type']}} - {{$info['price']}} USDT</p>
                                    @elseif($item->type=='deposit')

                                        Wallet Address: <br>
                                        <p>{{$item->wallet_address}}</p>
                                        Transaction Hash: <br>
                                        <p>{{$item->type!='deposit'?'-------------------':$item->hash}}</p>

                                    @elseif($item->type=='commission')

                                        @php
                                            $info = unserialize($item->description);

                                        @endphp
                                        <p> Selling at level : 21 - Amount : {{$info['amount']}} - Your Commission
                                            : {{$info['commission']}} USDT</p>

                                    @endif

                                </td>
                                <td class="text-center">{{$item->type}}</td>
                                <td class="text-center">
                                    <span class="badge badge-light-{{$class}}">{{$item->status}}</span>
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
    @push('script')

        <script type="text/javascript" src="/admin/assets/js/jquery.countdown.min.js"></script>

        <script type="text/javascript">
            $(function () {
                var d = new Date();
                d.setTime({{@$expiredData}} * 1000); // from: 02/10/2023 12:11 pm +0300
                $('.clock-builder-output').countdown(d, function (event) {
                    $(this).html(event.strftime('%M:%S'));
                });
            });
        </script>

        <script>
            function copyToClipboard(element) {

                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text()).select();
                document.execCommand("copy");
                $temp.remove();


                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Copied',
                    showConfirmButton: false,
                    timer: 1500
                })
            }

            window.addEventListener('swal:deposit', event => {
                Swal.fire({
                    icon: 'success',
                    title: event.detail.text,
                    showConfirmButton: true,

                })
            })
            window.addEventListener('swal:withdrawal', event => {
                Swal.fire({
                    icon: 'success',
                    title: event.detail.text,
                    showConfirmButton: true,

                })
            })
            window.addEventListener('swal:withdrawalError', event => {
                Swal.fire({
                    icon: 'warning',
                    title: event.detail.text,
                    showConfirmButton: true,

                })
            })
            window.addEventListener('swal:waitingTimer', event => {
                let timerInterval

                Swal.fire({
                    title: 'Dont close this page',
                    html:
                        'I will close in <strong></strong> seconds.',

                    timer: 1000000,
                    didOpen: () => {

                        Swal.showLoading()

                        timerInterval = setInterval(() => {
                            Swal.getHtmlContainer().querySelector('strong')
                                .textContent = (Swal.getTimerLeft() / 1000)
                                .toFixed(0)
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                })

            })
        </script>

    @endpush

</div>
