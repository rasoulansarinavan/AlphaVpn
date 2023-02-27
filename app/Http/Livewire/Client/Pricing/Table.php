<?php

namespace App\Http\Livewire\Client\Pricing;

use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        return view('client.livewire.pricing.table')->extends('client.layouts.app');
    }
}
