<?php

namespace App\Http\Livewire\Client\Auth;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Register extends Component
{
    public $referral;


    public function mount()
    {

        isset($_GET['referral']) ? $this->referral = $_GET['referral'] : $this->referral = '';

    }

    public function clientLogout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->back();
    }


    public function authentication($formData)
    {



        $validator = Validator::make($formData, [
            'referral' => 'exists:users,referral|max:15',
        ]);
        $validator->validate();
        $this->resetValidation();


        $inviteCode = $formData['referral'];


        Session::put('referral', $inviteCode);
        return redirect()->route('client.register.gmail');

    }


    public function redirectToProvider(): \Symfony\Component\HttpFoundation\RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('google')->redirect();

    }

    public function handleProviderCallback(User $user)
    {
        $gmailUser = Socialite::driver('google')->stateless()->user();


        $userCheck = $this->userCheck($gmailUser->getEmail());
        if ($userCheck) {
            if ($userCheck->blocked) {
                return redirect()->route('authentication.client')->with('userBlocked', $gmailUser->getEmail());
            }
            Auth::login($userCheck, true);
        }

        $authentication = $user->gmailRegister($gmailUser);

        if ($authentication) {
            return redirect()->route('client.profile.dashboard');
        } else {
            return redirect()->route('authentication.client')->with('userBlocked', $gmailUser->getEmail());
        }
    }

    public function userCheck($gmail)
    {
        return User::query()->where('email', $gmail)->first();
    }


    public function render()
    {
        return view('client.livewire.auth.register')->extends('admin.layouts.auth-app');

    }
}
