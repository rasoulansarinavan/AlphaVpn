<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.livewire.authentication.login');

    }

    public function login(Request $request)
    {
        $user = $request->only('phone', 'password');

        $admin=Admin::query()->where([
            'phone'=>$user['phone'],
            'password'=>$user['password'],
        ])->first();

        if ($admin){
            Auth::guard('admin')->login($admin,true);
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->with('error', 'Wrong Phone or Password');
        }
    }

}
