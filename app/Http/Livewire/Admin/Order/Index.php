<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use App\Models\Product;
use App\Models\Servers;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $order_id;
    protected $listeners = ['delete', 'changeStatus'];

    public $statuses = [
        "rejected",
        "pending",
        "confirmed",
    ];

    public function changeStatus($value)
    {
        $order_id = explode('/', $value)[1];
        $status = explode('/', $value)[0];

        $status_list = ['pending', 'confirmed', 'rejected'];
        if (in_array($status, $status_list)) {
            Order::query()
                ->where([
                    'id' => $order_id,
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


    public function delete($order_id)
    {
        Order::query()->where('id', $order_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }

    public function render()
    {
        $orders = Order::all();
        return view('admin.livewire.order.index', ['orders' => $orders])->extends('admin.layouts.app');
    }
}
