<?php

namespace App\Http\Livewire\Client\Home;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('Client.livewire.home.dashboard')->extends('client.layouts.app');
    }
}
