<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('Admin.livewire.home.dashboard')->extends('admin.layouts.app');
    }
}
