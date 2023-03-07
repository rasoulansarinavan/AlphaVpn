<?php

namespace App\Http\Livewire\Client\Home;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $wallet_total = '';


    public function mount()
    {

        $this->wallet_total = user_wallet(Auth::user()->id);

    }
    public function render()
    {
        return view('Client.livewire.home.dashboard')->extends('client.layouts.app');
    }
}
