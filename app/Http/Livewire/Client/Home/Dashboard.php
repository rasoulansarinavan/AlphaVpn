<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $wallet_total = '';
    public $referral = false;
    public $teamCount;


    public function mount()
    {

        $this->teamCount = count(getTeamCount(Auth::user()->id));

        $order = Order::query()->where('user_id', Auth::user()->id)->first();

        if ($order) {
            $this->referral = true;
        }

        $this->wallet_total = user_wallet(Auth::user()->id);

    }

    public function render()
    {
        return view('client.livewire.home.dashboard')->extends('client.layouts.app');
    }
}
