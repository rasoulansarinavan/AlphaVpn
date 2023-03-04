<?php

namespace App\Http\Livewire\Admin\Withdrawal;

use App\Models\withdrawal;
use Livewire\Component;

class Index extends Component

{
    protected $listeners = ['delete', 'changeStatus', 'deleteConfirm','update'];

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
        $withdrawal_id = explode('/', $value)[1];

        $status = explode('/', $value)[0];

        $status_list = ['Pending', 'Confirmed', 'Rejected'];
        if (in_array($status, $status_list)) {
            withdrawal::query()
                ->where([
                    'id' => $withdrawal_id,
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


    public function delete($withdrawal_id)
    {
        withdrawal::query()->where('id', $withdrawal_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }


    public function render()
    {
        $withdrawals = withdrawal::all();
        return view('admin.livewire.withdrawal.index', ['withdrawals' => $withdrawals])->extends('admin.layouts.app');
    }
}
