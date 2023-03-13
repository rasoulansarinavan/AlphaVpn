<div class="container">
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
    <div class="statbox widget box box-shadow layout-top-spacing">

        <div class="row">
            <div class="col-md-3">
                <form wire:submit.prevent="saveProduct(Object.fromEntries(new FormData($event.target)))">
                    <div class="mb-4">
                        <label class="form-label" for="server_id">Server</label>
                        <select class="form-select  @error('server_id') error-input-border @enderror"
                                name="server_id" id="server_id">
                            <option>Choose Server</option>
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
                        <input value="{{$name}}" name="name" id="name" class="form-control"
                               placeholder="Type here">
                        @foreach ($errors->get('name') as $message)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                        @endforeach
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="discount">Discount</label>
                        <input value="{{$discount}}" name="discount" id="discount"
                               class="form-control"
                               placeholder="Type here">
                        @foreach ($errors->get('discount') as $message)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                        @endforeach
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="type_id">Type</label>
                        <select class="form-select  @error('type') error-input-border @enderror"
                                name="type_id" id="type_id">
                            <option>Choose Type</option>

                            @foreach($types as $type)
                                <option
                                    @if($type_id==$type->id)
                                        selected="selected"
                                    @endif
                                    value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        @foreach($errors->get('type') as $message)
                            <sapan wire:loading.remove
                                   class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                        @endforeach
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="price">Price</label>
                        <input value="{{$price}}" name="price" id="price" class="form-control"
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
                                <td><b>{{optional($product->server)->name}}</b></td>
                                <td><b>{{$product->name}}</b></td>
                                <td><b>{{number_format($product->price)}}</b></td>

                                <td>
                                    @if(isset($product->discount))
                                        <b>{{$product->discount}} %</b>
                                    @else
                                        <b>0</b>
                                    @endif
                                </td>
                                <td>{{optional($product->type)->name}}</td>
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
