<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $user_id;
    protected $listeners = ['delete'];
    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $id
        ]);
    }


    public function delete($user_id)
    {
        User::query()->where('id', $user_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }


    public function render()
    {
        $users = User::all();
        return view('admin.livewire.users.index', ['users' => $users])->extends('admin.layouts.app');
    }
}
