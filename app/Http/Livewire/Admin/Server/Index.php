<?php

namespace App\Http\Livewire\Admin\Server;


use App\Models\Servers;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $name = '', $password = '', $ip = '', $server_id;
    protected $listeners = ['delete', 'saveServer'];

    public function saveServer($formData, Servers $servers)
    {
        if ($this->server_id != null) {
            $server_id = $this->server_id;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'password' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'ip' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $server_id = 0;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'password' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'ip' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $servers->saveServer($formData, $server_id);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->name = '';
        $this->password = '';
        $this->ip = '';
        $this->server_id = '';
    }

    public function editServer($server_id)
    {
        $server = Servers::query()->where('id', $server_id)->first();
        $this->name = $server->name;
        $this->password = $server->password;
        $this->ip = $server->ip;
        $this->server_id = $server->id;
    }

    public function deleteConfirm($id)
    {

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($server_id)
    {
        Servers::query()->where('id', $server_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }

    public function render()
    {
        $servers = Servers::all();
        return view('admin.livewire.server.index', ['servers' => $servers])->extends('admin.layouts.app');
    }
}
