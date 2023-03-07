<?php

namespace App\Http\Livewire\Client\Wallet;


use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    public $amount = '';
    public $wallet_address = '';
    public $hash = '';
    public $wallet_total = '';


    public function mount()
    {

        $this->wallet_total = user_wallet(Auth::user()->id);

    }

    public function deposit(Wallet $wallet)
    {

        $formData = [
            'amount' => $this->amount,
            'wallet_address' => $this->wallet_address,
            'hash' => $this->hash
        ];
        $validator = Validator::make($formData, [
            'amount' => 'required | integer | min:10',
            'wallet_address' => 'required | string',
            'hash' => 'required|unique:wallets,hash|size:64 | string',
        ]);


        $validator->validate();
        $this->resetValidation();
        $wallet->deposit($formData);

        $this->wallet_address = '';
        $this->hash = '';
        $this->amount = '';
        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);


    }

    public function withdrawal(Wallet $wallet)
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
        $wallet->withdrawal($formData);

        $this->wallet_address = '';
        $this->hash = '';
        $this->amount = '';
        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

    }

    public function render()
    {
        $wallet = Wallet::query()->where('user_id', Auth::user()->id)->paginate(10);
        return view('Client.livewire.wallet.index', ['wallet' => $wallet])->extends('client.layouts.app');
    }
}
