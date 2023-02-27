<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.order.index')->extends('admin.layouts.app');
    }
}
