<?php

namespace App\Http\Livewire\Client\Auth;

use Livewire\Component;

class Register extends Component
{


    public function render()
    {
        return view('client.livewire.auth.register')->extends('admin.layouts.auth-app');

    }
}
