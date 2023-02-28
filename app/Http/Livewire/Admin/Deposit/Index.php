<?php

namespace App\Http\Livewire\Admin\Deposit;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.deposit.index')->extends('admin.layouts.app');
    }
}
