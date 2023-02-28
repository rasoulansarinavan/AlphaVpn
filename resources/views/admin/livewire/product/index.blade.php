


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
                    <form wire:submit.prevent="saveProduct(Object.fromEntries(new FormData($event.target)))">
                        <div class="mb-4">
                            <label class="form-label" for="server_id">choose Server</label>
                            <select class="form-select  @error('server_id') error-input-border @enderror"
                                    name="server_id" id="server_id" wire:model="server_id">
                                <option></option>
                                @foreach($servers as $server)
                                    <option
                                        @if($server_id==$server->id)
                                            selected="selected"
                                        @endif
                                        value="{{$server->id}}">{{$server->name}}</option>
                                @endforeach
                            </select>
                            @foreach($errors->get('server_id') as $message)
                                <sapan wire:loading.remove
                                       class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                            @endforeach
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="name">Product Name</label>
                            <input value="{{$name}}" wire:model="name" name="name" id="name" class="form-control"
                                   placeholder="Type here">
                            @foreach ($errors->get('name') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="discount">Discount</label>
                            <input value="{{$discount}}" wire:model="discount" name="discount" id="discount"
                                   class="form-control"
                                   placeholder="Type here">
                            @foreach ($errors->get('discount') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="type">choose Type</label>
                            <select class="form-select  @error('type') error-input-border @enderror"
                                    name="type" id="type" wire:model="type">
                                <option></option>

                                @foreach($features as $feature)
                                <option
                                    @if($server_id==$server->id)
                                        selected="selected"
                                    @endif
                                    value="{{$feature->product_id}}">{{$feature->description}}</option>
                                @endforeach
                            </select>
                            @foreach($errors->get('type') as $message)
                                <sapan wire:loading.remove
                                       class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                            @endforeach
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="price">Price</label>
                            <input value="{{$price}}" wire:model="price" name="price" id="price" class="form-control"
                                   placeholder="Type here">
                            @foreach ($errors->get('price') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Create Feature</button>
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
                                <th>Server Name</th>
                                <th>Product Name</th>
                                <th>price</th>
                                <th>Discount</th>
                                <th>Type</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>{{$loop->index+1}}</td>
                                    <td><b>{{optional($product->parent)->name}}</b></td>
                                    <td><b>{{$product->name}}</b></td>
                                    <td><b>{{$product->price}}</b></td>
                                    <td><b>{{$product->discount}}</b></td>
                                    <td>{{$product->type}}</td>
                                    <td class="text-end">
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                                 data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" wire:click="editProduct('{{$product->id}}')">Edit
                                                    info</a>
                                                <a class="dropdown-item text-danger"
                                                   wire:click="deleteConfirm({{$product->id}})">Delete</a>
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
