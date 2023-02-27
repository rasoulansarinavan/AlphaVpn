<?php

namespace App\Http\Livewire\Client\Team;

use Livewire\Component;

class Members extends Component
{
    public function render()
    {
        return view('client.livewire.team.members')->extends('client.layouts.app');
    }
}
