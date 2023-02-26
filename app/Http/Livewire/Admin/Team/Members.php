<?php

namespace App\Http\Livewire\Admin\Team;

use Livewire\Component;

class Members extends Component
{
    public function render()
    {
        return view('admin.livewire.team.members')->extends('admin.layouts.app');
    }
}
