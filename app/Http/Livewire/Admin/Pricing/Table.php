<?php

namespace App\Http\Livewire\Admin\Pricing;

use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        return view('Admin.livewire.pricing.table')->extends('admin.layouts.app');
    }
}
