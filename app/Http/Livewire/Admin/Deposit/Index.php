<?php

namespace App\Http\Livewire\Admin\Deposit;

use App\Models\Deposit;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['changeStatus', 'delete','update'];
    public $statuses = [
        "Rejected",
        "Pending",
        "Confirmed",
    ];

    public function update($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $id
        ]);
    }


    public function changeStatus($value)
    {
        $deposit_id = explode('/', $value)[1];
        $status = explode('/', $value)[0];

        $status_list = ['Pending', 'Accepted', 'Rejected'];
        if (in_array($status, $status_list)) {
            Deposit::query()
                ->where([
                    'id' => $deposit_id,
                ])
                ->update(['status' => $status]);
        }
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


    public function deleted($deposit_id)
    {
        Deposit::query()->where('id', $deposit_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }


    public function render()
    {
        $deposits = Deposit::all();
        return view('admin.livewire.deposit.index', ['deposits' => $deposits])->extends('admin.layouts.app');
    }
}
