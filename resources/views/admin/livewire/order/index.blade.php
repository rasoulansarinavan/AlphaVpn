<div class="widget-content widget-content-area br-8">
    <table id="invoice-list" class="table dt-table-hover" style="width:100%">
        <thead>
        <tr>
            <th class="checkbox-column">#</th>
            <th>User Name</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Server Name</th>
            <th>IP</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            @php
                $color='';
                    if ($order->status=='pending'){
                        $color='#fff';

                    }elseif($order->status=='confirmed'){
                    $color='#00ab55';
                    }elseif($order->status=='rejected'){
                        $color='#e7515a';
                    }
            @endphp

            <tr>
                <td class="checkbox-column">{{$loop->index+1}}</td>
                <td>
                    <a href="javascript:0">
                        <span class="inv-number">{{optional($order->parent)->name}}</span>
                        <br>
                        <span class="inv-number">{{optional($order->parent)->email}}</span>
                    </a>
                </td>
                <td><a href="javascript:0"><span
                            class="inv-number">{{optional($order->product)->name}}</span></a></td>
                <td><a href="javascript:0"><span
                            class="inv-number">{{optional($order->product)->price}}</span></a></td>

                <td><a href="javascript:0"><span
                            class="inv-number">{{optional($order->product)->parent->name}}</span></a></td>
                <td><a href="javascript:0"><span
                            class="inv-number">{{optional($order->product)->parent->ip}}</span></a></td>

                <td>
                    <select name="changeStatus" id="changeStatus" style="background: {{$color}};color: #000"
                            class="form-select @error('changeStatus') error-input-border @enderror"
                            wire:change="changeStatus($event.target.value)">

                        @foreach($statuses as  $status)
                            <option
                                @if($status==$order->status)
                                    selected="selected"
                                @endif

                                value="{{$status}}/{{$order->id}}"
                            >{{$status}}</option>
                        @endforeach
                    </select>
                </td>

                <td>
                    <a wire:click="deleteConfirm({{$order->id}})"
                       class="badge badge-light-danger text-start action-delete">
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
</div>
