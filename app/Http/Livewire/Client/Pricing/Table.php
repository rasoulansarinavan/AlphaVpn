<?php

namespace App\Http\Livewire\Client\Pricing;

use App\Models\Product;
use Livewire\Component;

class Table extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function buy($product_id)
    {
        //check user wallet

    }

    public function render()
    {
        return view('client.livewire.pricing.table')->extends('client.layouts.app');
    }
}
