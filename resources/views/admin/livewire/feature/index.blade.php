<div class="container">
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">User Interface</a></li>
                <li class="breadcrumb-item active" aria-current="page">Maps</li>
            </ol>
        </nav>
    </div>
    <div class="statbox widget box box-shadow layout-top-spacing">

            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveFeature(Object.fromEntries(new FormData($event.target)))">
                        <div class="mb-4">
                            <label class="form-label" for="product_id">choose product</label>

                            <select class="form-select  @error('product_id') error-input-border @enderror"
                                    name="product_id" id="product_id">
                                <option></option>
                                @foreach($products as $product)
                                    <option
                                        @if($product_id==$product->id)
                                            selected="selected"
                                        @endif
                                        value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                            @foreach($errors->get('product_id') as $message)
                                <sapan wire:loading.remove
                                       class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                            @endforeach
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="description">Description</label>
                            <textarea  name="description" id="description" class="form-control"
                                      placeholder="Type here">{{$description}}</textarea>
                            @foreach ($errors->get('description') as $message)
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
                                <th>Name</th>
                                <th>price</th>
                                <th>discount</th>
                                <th>type</th>
                                <th>description</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($features as $feature)
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>{{$loop->index+1}}</td>
                                    <td><b>{{optional($feature->parent)->name}}</b></td>
                                    <td><b>{{number_format(optional($feature->parent)->price)}}</b></td>
                                    <td><b>{{optional($feature->parent)->discount}}%</b></td>
                                    <td><b>{{optional($feature->parent)->type}}</b></td>
                                    <td>{{$feature->description}}</td>
                                    <td class="text-end">
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                                 data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" wire:click="editFeature('{{$feature->id}}')">Edit
                                                    info</a>
                                                <a class="dropdown-item text-danger"
                                                   wire:click="deleteConfirm({{$feature->id}})">Delete</a>
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
