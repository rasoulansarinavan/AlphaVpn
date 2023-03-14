<?php

namespace App\Http\Livewire\Client\User;

use App\Models\UserWallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Setting extends Component
{
    public $user_id = 1, $address_wallet = '', $wallet_id;

    public function saveAddressWallet($formData, UserWallet $wallets)
    {
        if ($this->wallet_id != null) {
            $wallet_id = $this->wallet_id;
            $validator = Validator::make($formData, [
                'address_wallet' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $wallet_id = 0;
            $validator = Validator::make($formData, [
                'address_wallet' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $wallets->saveAddressWallet($formData, $wallet_id);

        $this->dispatchBrowserEvent('swal:saveAddressWalletAlert', [
            'message' => trans('alerts.success')
        ]);

        $this->user_id = Auth::user()->id;
        $this->address_wallet = '';
        $this->wallet_id = '';

    }


    public function editWallet($wallet_id)
    {
        $wallet = UserWallet::query()->where('id', $wallet_id)->first();

        if ($wallet) {
            $this->user_id = $wallet->user_id;
            $this->address_wallet = $wallet->address_wallet;
            $this->wallet_id = $wallet->id;
        }
    }


    public function render()
    {
        $wallet = UserWallet::query()->where('user_id', Auth::user()->id)->first();
        return view('client.livewire.user.setting', ['wallet' => $wallet])->extends('client.layouts.app');
    }
}
