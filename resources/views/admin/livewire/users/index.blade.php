<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
        <thead>
        <tr>
            <th class="checkbox-area" scope="col">
                <div class="form-check form-check-primary">
                    <input class="form-check-input" id="custom_mixed_parent_all" type="checkbox">
                </div>
            </th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th class="text-center" scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <div class="form-check form-check-primary">
                        <input class="form-check-input custom_mixed_child" type="checkbox">
                    </div>
                </td>
                <td>
                    <div class="media">
                        <div class="media-body align-self-center">
                            <h6 class="mb-0">{{$user->name}}</h6>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="mb-0">{{$user->email}}</p>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                        <a wire:click="deleteConfirm({{$user->id}})" class="action-btn btn-delete bs-tooltip"
                           data-toggle="tooltip"
                           data-placement="top" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-trash-2">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path
                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
