<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.user.index')->extends('admin.layouts.app');
    }
}
