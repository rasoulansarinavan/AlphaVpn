<?php

namespace App\Http\Livewire\Client\Wallet;

use App\Models\Deposit;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $amount = '';
    public $wallet_address = '';
    public $hash = '';

    // display hash code when deposit is action


    public function deposit(Deposit $deposit)
    {


        $formData = [
            'amount' => $this->amount,
            'wallet_address' => $this->wallet_address,
            'hash' => $this->hash
        ];
        $validator = Validator::make($formData, [
            'amount' => 'required | integer | min:10',
            'wallet_address' => 'required | string',
            'hash' => 'required|unique:deposits,hash|size:64 | string',
        ]);


        $validator->validate();
        $this->resetValidation();
        $deposit->deposit($formData);

        $this->wallet_address='';
        $this->hash='';
        $this->amount='';
        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);



    }

    public function withdrawal()
    {


        $formData = [
            'amount' => $this->amount,
            'wallet_address' => $this->wallet_address,
        ];
        $validator = Validator::make($formData, [
            'amount' => 'required | integer | min:10',
            'wallet_address' => 'required ',
        ]);

        $validator->validate();
        $this->resetValidation();

    }

    public function render()
    {
        return view('Client.livewire.wallet.index')->extends('client.layouts.app');
    }
}
