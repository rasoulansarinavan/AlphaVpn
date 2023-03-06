<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Types</h2>
        </div>
        <div>
            <input class="form-control bg-white" type="text" placeholder="Search Categories">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveType(Object.fromEntries(new FormData($event.target)))">

                        <div class="mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input value="{{$name}}"  wire:model.defer="name" class="form-control" name="name" id="name"
                                   type="text" placeholder="Type here">
                            @foreach($errors->get('name') as $message)
                                <sapan wire:loading.remove
                                       class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                            @endforeach
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Create Type</button>
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
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($types as $type)
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>{{$loop->index+1}}</td>
                                    <td><b>{{$type->name}}</b></td>
                                    <td class="text-end">
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                                 data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" wire:click="editType('{{$type->id}}')">Edit
                                                    info</a>
                                                <a class="dropdown-item text-danger"
                                                   wire:click="deleteConfirm({{$type->id}})">Delete</a>
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
