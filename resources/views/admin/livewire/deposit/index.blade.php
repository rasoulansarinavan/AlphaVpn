<div class="widget-content widget-content-area br-8">

    <table id="invoice-list" class="table dt-table-hover" style="width:100%">
        <thead>
        <tr>
            <th class="checkbox-column">#</th>
            <th>User</th>
            <th>Amount</th>
            <th>Info</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($deposits as $deposit)
            @php
                $color='';
                    if ($deposit->status=='pending'){
                        $color='#fff';

                    }elseif($deposit->status=='confirmed'){
                    $color='#00ab55';
                    }elseif($deposit->status=='rejected'){
                        $color='#e7515a';
                    }

            @endphp
            <tr>
                <td class="checkbox-column">{{$loop->index+1}}</td>
                <td><a href="./app-invoice-preview.html">
                        <span
                            class="inv-number">{{optional($deposit->user)->name}}</span>
                        <br>
                        <span
                            class="inv-number">{{optional($deposit->user)->email}}</span>
                    </a></td>
                <td><a href="./app-invoice-preview.html"><span
                            class="inv-number">{{number_format($deposit->amount)}}</span></a></td>

                <td>
                    Wallet Address: <br>

                    <div class="d-flex justify-content-start align-items-center">
                        <p class="wallet{{$deposit->id}}">{{$deposit->wallet_address}}</p>
                        <div class=" copy ms-3"
                             onclick="copyToClipboard('.wallet{{$deposit->id}}')"
                             style="color: #fff;cursor: pointer">
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
                    Transaction Hash: <br>
                    <div class="d-flex justify-content-start align-items-center">
                   <p class="hash{{$deposit->id}}">{{$deposit->hash}}</p>
                   <div class="copy ms-3"
                        onclick="copyToClipboard('.hash{{$deposit->id}}')"
                        style="color: #fff;cursor: pointer">
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

                </td>
                <td>
                    <div class="mb-4">
                        <select name="changeStatus" id="changeStatus" style="background: {{$color}};color: #000"
                                class="form-select @error('changeStatus') error-input-border @enderror"
                                wire:change="changeStatus($event.target.value)">

                            @foreach($statuses as  $status)
                                <option
                                    @if($status==$deposit->status)
                                        selected="selected"
                                    @endif

                                    value="{{$status}}/{{$deposit->id}}">{{$status}}</option>
                            @endforeach
                        </select>
                    </div>
                </td>

                <td>
                    <a
                        class="badge badge-light-danger text-start action-delete" href="#"
                        wire:click="deleteConfirm({{$deposit->id}})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @push('script')
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


        </script>
    @endpush
</div>



