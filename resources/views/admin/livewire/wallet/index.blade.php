<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Feature</h2>
        </div>
        <div>
            <input class="form-control bg-white" type="text" placeholder="Search Categories">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveUserWallet(Object.fromEntries(new FormData($event.target)))">
                        <div class="mb-4">
                            <label class="form-label" for="user_id">Choose USer</label>
                            <select class="form-select  @error('user_id') error-input-border @enderror"
                                    name="user_id" id="user_id">
                                <option></option>
                                @foreach($users as $user)
                                    <option
                                        @if($user_id==$user->id)
                                            selected="selected"
                                        @endif
                                        value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            @foreach($errors->get('user_id') as $message)
                                <sapan wire:loading.remove
                                       class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                            @endforeach
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="address_wallet">Address Wallet</label>
                            <textarea name="address_wallet" id="address_wallet" class="form-control"
                                      placeholder="Type here">{{$address_wallet}}</textarea>
                            @foreach ($errors->get('address_wallet') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </th>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Address Wallet</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($wallets as $wallet)
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>{{$loop->index+1}}</td>
                                    <td><b>{{optional($wallet->parent)->name}}</b></td>
                                    <td>{{$wallet->address_wallet}}</td>
                                    <td class="text-end">
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                                 data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" wire:click="editWallet('{{$wallet->id}}')">Edit
                                                    info</a>
                                                <a class="dropdown-item text-danger"
                                                   wire:click="deleteConfirm({{$wallet->id}})">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
