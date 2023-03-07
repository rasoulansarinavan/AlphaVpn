<?php

namespace App\Http\Livewire\Client\Orders;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('Client.livewire.orders.index')->extends('client.layouts.app');
    }
}
