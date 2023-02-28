<?php

namespace App\Http\Livewire\Client\User;

use Livewire\Component;

class Setting extends Component
{
    public function render()
    {
        return view('client.livewire.user.setting')->extends('client.layouts.app');
    }
}
