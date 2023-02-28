<?php

namespace App\Http\Livewire\Admin\Wallet;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.wallet.index')->extends('admin.layouts.app');
    }
}
