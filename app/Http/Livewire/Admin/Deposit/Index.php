<?php

namespace App\Http\Livewire\Admin\Deposit;

use App\Models\Deposit;
use Livewire\Component;

class Index extends Component
{
    public $deposit_id;
    protected $listeners = ['delete', 'changeStatus'];
    public $statuses = [
        "Rejected",
        "Pending",
        "Confirmed",
    ];

    public function changeStatus($value)
    {
        $deposit_id = explode('/', $value)[1];
        $status = explode('/', $value)[0];

        $status_list = ['Pending', 'Confirmed', 'Rejected'];
        if (in_array($status, $status_list)) {
            Deposit::query()
                ->where([
                    'id' => $deposit_id,
                ])
                ->update(['status' => $status]);
        }
        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
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


    public function delete($deposit_id)
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
