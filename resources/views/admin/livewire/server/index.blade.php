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
                <form wire:submit.prevent="saveServer(Object.fromEntries(new FormData($event.target)))">


                    <div class="mb-4">
                        <label class="form-label" for="type_id">Types</label>
                        <select class="form-select  @error('type_id') error-input-border @enderror"
                                name="type_id" id="type_id" wire:model.defer="type_id">
                            <option disabled selected>Choose</option>
                            @foreach($types as $type)
                                <option
                                    @if(@$type_id==$type->id)
                                        selected="selected"
                                    @endif
                                    value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        @foreach($errors->get('type_id') as $message)
                            <sapan wire:loading.remove
                                   class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                        @endforeach
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="name">Server Name</label>
                        <input value="{{$name}}" name="name" class="form-control" id="name" type="text"  wire:model.defer="name"
                               placeholder="Type here">
                        @foreach ($errors->get('name') as $message)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                        @endforeach
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input value="{{$password}}" name="password" class="form-control" id="password"  wire:model.defer="password"
                               type="text" placeholder="Type here">
                        @foreach ($errors->get('password') as $message)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                        @endforeach
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="ip">IP</label>
                        <input value="{{$ip}}" name="ip" class="form-control" id="ip"  wire:model.defer="ip"
                               type="text" placeholder="Type here">
                        @foreach ($errors->get('ip') as $message)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                        @endforeach
                    </div>


                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Create Server</button>
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
                            <th>ID</th>
                            <th>Server Name</th>
                            <th>Password</th>
                            <th>IP</th>
                            <th class="text-end">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($servers as $server)

                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>{{$loop->index+1}}</td>
                                <td><b>{{$server->name}}</b></td>
                                <td>{{$server->password}}</td>
                                <td>{{$server->ip}}</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                             data-bs-toggle="dropdown"><i
                                                class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a
                                                class="dropdown-item" wire:click="editServer('{{$server->id}}')">Edit
                                                info</a><a
                                                class="dropdown-item text-danger"
                                                wire:click="deleteConfirm({{$server->id}})">Delete</a>
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
