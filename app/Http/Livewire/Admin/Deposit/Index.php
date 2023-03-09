<?php

namespace App\Http\Livewire\Admin\Deposit;

use App\Models\Deposit;
use App\Models\Wallet;
use Livewire\Component;

class Index extends Component
{
    public $deposit_id;
    protected $listeners = ['delete', 'changeStatus'];
    public $statuses = [
        "rejected",
        "pending",
        "confirmed",
    ];

    public function changeStatus($value)
    {
        $deposit_id = explode('/', $value)[1];
        $status = explode('/', $value)[0];

        $status_list = ['pending', 'confirmed', 'rejected'];
        if (in_array($status, $status_list)) {
            Wallet::query()
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
        $deposits = Wallet::query()->where('type','=','deposit')->with('user')->paginate(10);
        return view('admin.livewire.deposit.index', ['deposits' => $deposits])->extends('admin.layouts.app');
    }
}
