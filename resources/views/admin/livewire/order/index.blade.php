<div class="widget-content widget-content-area br-8">
    <table id="invoice-list" class="table dt-table-hover" style="width:100%">
        <thead>
        <tr>
            <th class="checkbox-column">#</th>
            <th>Name</th>
            <th>Period</th>
            <th width="20">Price</th>
            <th>Configs</th>
            <th width="160">Status</th>
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
                            class="inv-number">{{optional($order->product->type)->name}}</span></a></td>
                <td><a href="javascript:0"><span
                            class="inv-number">{{optional($order->product)->price}}</span></a></td>

                <td>
                    <ul class="d-flex flex-wrap p-0">
                        @forelse($order->files as $file)

                            <li class="badge badge-primary mb-2 me-4"><a target="_blank"
                                                                         href="{{$file->path}}">{{$file->name}}</a><a
                                    href="javascript:0" class="ms-sm-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="black" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-x-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                    </svg>
                                </a></li>
                        @empty
                        @endforelse

                    </ul>

                    <form wire:submit.prevent="save('{{$order->id}}')">
                        <input type="file" wire:model="files" multiple>

                        @error('files.*') <span class="error">{{ $message }}</span> @enderror
                        <div wire:loading wire:target="files">Uploading...</div>
                        <button class="btn btn-warning btn-rounded" type="submit" wire:loading.attr="disabled">Save
                        </button>
                    </form>
                </td>


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
