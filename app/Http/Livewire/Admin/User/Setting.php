<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;

class Setting extends Component
{
    public function render()
    {
        return view('Admin.livewire.user.setting')->extends('admin.layouts.app');
    }
}
