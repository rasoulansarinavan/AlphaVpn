<?php

namespace App\Http\Livewire\Admin\Type;

use App\Models\Types;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $name = '', $type_id;

    protected $listeners = ['delete', 'saveType'];

    public function saveType($formData, Types $types)
    {
        if ($this->type_id != null) {
            $type_id = $this->type_id;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $type_id = 0;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $types->saveType($formData, $type_id);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->name = '';
        $this->type_id = '';

    }

    public function editType($type_id)
    {
        $type = Types::query()->where('id', $type_id)->first();
        $this->name = $type->name;
        $this->type_id = $type->id;
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

    public function delete($type_id)
    {
        Types::query()->where('id', $type_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }

    public function render()
    {
        $types = Types::all();
        return view('admin.livewire.type.index', ['types' => $types])->extends('admin.layouts.app');
    }
}
