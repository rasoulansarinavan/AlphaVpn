<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('client.profile.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </nav>
        </div>

        <div class="row layout-top-spacing">

            <div class=" col-md-12 layout-spacing">
                <div class="table-responsive">
                    <table class="table table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th class="checkbox-column" width="30">#</th>
                            <th width="100">Name</th>
                            <th width="50">Period</th>
                            <th>Configs</th>
                            <th width="160">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            @php
                                $class='';
                                if ($order->status=='pending'){
                                    $class='info';
                                }elseif ($order->status=='confirmed'){
                                    $class='success';

                                }elseif ($order->status=='rejected'){
                                    $class='danger';
                                }

                                $expired='';
                                if ($order->product->type->name=='Monthly'){
                                    $expired=29;
                                }elseif ($order->product->type->name=='2 Months'){
                                    $expired=59;
                                }elseif ($order->product->type->name=='3 Months'){
                                    $expired=89;
                                }
                                  $expiredData = Carbon\Carbon::parse($order->created_at)->addDays($expired+1)->addHours(2)->format('m/d/Y h:i:s');;
                            @endphp

                            <tr>
                                <td class="checkbox-column">{{$loop->index+1}}</td>
                                <td><h3 class="text-left"><b>{{number_format($order->price)}}</b>

                                        <span class="d-inline mt-1" style="font-size: 18px">USDT</span>
                                    </h3>
                                    {{$order->created_at}}
                                </td>
                                <td><a href="javascript:0"><span
                                            class="inv-number">{{optional($order->product->type)->name}}</span></a>
                                    @if($order->status!='pending')
                                        <div id="clock-builder-output" data-countdown="{{$expiredData}}"
                                             style="letter-spacing: 1px;font-weight: 600;font-size: 20px;"
                                             wire:ignore
                                             class=" text-start label label-light color-2 d-block clock-builder-output"></div>
                                    @endif
                                </td>

                                <td>
                                    @if($order->status=='pending')
                                        <div class="d-flex align-items-center"><span
                                                class="spinner-border text-white me-2 align-self-center loader-sm "></span><span class="ms-3">Please wait . . . </span>
                                        </div>
                                    @endif

                                    <ul class="d-flex flex-wrap p-0">
                                        @forelse($order->files as $file)

                                            <li class="badge badge-primary mb-2 me-4"><a target="_blank"
                                                                                         href="{{$file->path}}">{{$file->name}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         style="background: white;border-radius: 50%"
                                                         viewBox="0 0 24 24" fill="balck" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-arrow-down ms-2">
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <polyline points="19 12 12 19 5 12"></polyline>
                                                    </svg>

                                                </a>
                                            </li>
                                        @empty
                                        @endforelse

                                    </ul>

                                </td>

                                <td class="text-center">
                                    <span class="badge badge-light-{{$class}}">{{$order->status}}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @push('script')

        <script type="text/javascript" src="/admin/assets/js/jquery.countdown.min.js"></script>

        <script>
            $(function () {
                $('[data-countdown]').each(function () {
                    var $this = $(this), finalDate = $(this).data('countdown');
                    $this.countdown(finalDate, function (event) {
                        $this.html(event.strftime('%D days %H:%M:%S'))
                    }).on('finish.countdown', function () {
                        alert("Finish");
                    });
                });
            });
        </script>
        {{--   <script type="text/javascript">
               $(function () {
                   var d = new Date();
                   d.setTime({{$afterThreeMonthDate}} * 1000); // from: 02/10/2023 12:11 pm +0300
                   $('.clock-builder-output').countdown(d, function (event) {
                       $(this).html(event.strftime('%D:%H:%M:%S'));
                   });
               });
           </script>--}}
    @endpush
</div>
