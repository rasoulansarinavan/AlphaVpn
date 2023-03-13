<?php

namespace App\Http\Livewire\Client\Orders;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $statuses = [
        "rejected",
        "pending",
        "confirmed",
    ];

    public function render()
    {
        $orders = Order::query()->where('user_id', Auth::user()->id)->with('product', 'parent','files')->paginate(10);
        return view('client.livewire.orders.index',['orders' => $orders])->extends('client.layouts.app');
    }
}
