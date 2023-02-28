<?php

namespace App\Http\Livewire\Client\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('client.livewire.auth.login')->extends('client.layouts.app');
    }
}
