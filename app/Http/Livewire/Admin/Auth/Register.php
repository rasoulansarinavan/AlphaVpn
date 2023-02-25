<?php

namespace App\Http\Livewire\Admin\Auth;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('admin.livewire.auth.register')->extends('admin.layouts.auth-app');
    }
}
