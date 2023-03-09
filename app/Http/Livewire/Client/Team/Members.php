<?php

namespace App\Http\Livewire\Client\Team;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Members extends Component
{

    public $team;


    public function mount()
    {
        $this->team = getTeamCountWithProfit(Auth::user()->id);
    }

    public function render()
    {
        return view('client.livewire.team.members')->extends('client.layouts.app');
    }
}
