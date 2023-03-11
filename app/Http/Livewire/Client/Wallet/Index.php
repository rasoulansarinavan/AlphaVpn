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
    //for send request to tron scan
    public $pendingDeposit = null;

    public function deposit(Wallet $wallet)
    {

        $formData = [
            'amount' => $this->amount,
            'wallet_address' => $this->wallet_address,
            'hash' => $this->hash
        ];

        //  dd(transactionHistory($formData));

        $validator = Validator::make($formData, [
            'amount' => 'required | integer | min:20',
            'wallet_address' => 'required | string',
            'hash' => 'required|unique:wallets,hash|size:64 | string',
        ]);


        $validator->validate();
        $this->resetValidation();
        $wallet->deposit($formData);

        $this->wallet_address = '';
        $this->hash = '';
        $this->amount = '';
        $this->pendingDeposit = null;

        $this->redirect('/profile/wallet-details');

        //$this->dispatchBrowserEvent('swal:waitingTimer');


    }

    public function withdrawal(Wallet $wallet)
    {
        if (\Illuminate\Support\Carbon::now()->getTranslatedDayName() == 'Monday') {
            $formData = [
                'amount' => $this->amount,
                'wallet_address' => $this->wallet_address,
            ];
            $validator = Validator::make($formData, [
                'amount' => 'required | integer | min:20',
                'wallet_address' => 'required ',
            ]);
            $validator->validate();
            $this->resetValidation();

            //check account balance
            $balance = user_wallet(Auth::user()->id);

            if ($balance < $formData['amount']) {
                $this->dispatchBrowserEvent('swal:withdrawalError', [
                    'text' => 'Your account balance is insufficient !'
                ]);
            } else {
                $wallet->withdrawal($formData);

                $this->wallet_address = '';
                $this->hash = '';
                $this->amount = '';
                $this->dispatchBrowserEvent('swal:withdrawal', [
                    'text' => 'Withdrawal from the account will be done after confirmation'
                ]);
            }
        }


    }

    public function render()
    {
        $balance = user_wallet(Auth::user()->id);
        $wallet = Wallet::query()->where('user_id', Auth::user()->id)->latest()->paginate(10);
        $this->pendingDeposit = Wallet::query()->where([
            'user_id' => Auth::user()->id,
            'status' => 'pending',
            'type' => 'deposit',
        ])->first();


        return view('Client.livewire.wallet.index', ['wallet' => $wallet, 'balance' => $balance])->extends('client.layouts.app');
    }
}
