<div class="widget-content widget-content-area br-8">

    <table id="invoice-list" class="table dt-table-hover" style="width:100%">
        <thead>
        <tr>
            <th class="checkbox-column">#</th>
            <th>User</th>
            <th>Price</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($withdrawals as $withdrawal)
            <tr>
                <td class="checkbox-column">{{$loop->index+1}}</td>
                <td><a href="./app-invoice-preview.html"><span
                            class="inv-number">{{optional($withdrawal->parent)->name}}</span></a></td>
                <td><a href="./app-invoice-preview.html"><span class="inv-number">{{$withdrawal->price}}</span></a></td>


                <td>
                    <div class="mb-4">
                        <label for="changeStatus">Select Status:</label>
                        <select name="changeStatus" id="changeStatus"
                                class="form-select @error('changeStatus') error-input-border @enderror"
                                wire:change="update($event.target.value)" >
                            <potion>{{$withdrawal->status}}</potion>
                            @foreach($statuses as  $status)
                                <option
                                    {{--                                    @if($status==$deposit->status)--}}
                                    {{--                                        selected="selected"--}}
                                    {{--                                    @endif--}}
                                    value="{{$status}}/{{$withdrawal->id}}">{{ $status }}</option>
                            @endforeach
                        </select>
                    </div>
                </td>


                <td>
                    <a
                        class="badge badge-light-danger text-start action-delete" href="#"
                        wire:click="deleteConfirm({{$withdrawal->id}})">
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



