<?php

namespace App\Http\Livewire\Admin\Wallet;

use App\Models\User;
use App\Models\UserWallet;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component

{
    public $user_id = '', $address_wallet = '', $wallet_id;
    protected $listeners = ['delete', 'saveUserWallet'];

    public function saveUserWallet($formData, UserWallet $wallets)
    {


        if ($this->wallet_id != null) {
            $wallet_id = $this->wallet_id;
            $validator = Validator::make($formData, [
                'user_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'address_wallet' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $wallet_id = 0;
            $validator = Validator::make($formData, [
                'user_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'address_wallet' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $wallets->saveUserWallet($formData, $wallet_id);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->user_id = '';
        $this->address_wallet = '';
        $this->wallet_id = '';

    }


    public function editWallet($wallet_id)
    {
        $wallet = UserWallet::query()->where('id', $wallet_id)->first();

        $this->user_id = $wallet->user_id;
        $this->address_wallet = $wallet->address_wallet;
        $this->wallet_id = $wallet->id;
    }

    public function deleteConfirm($id)
    {

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($wallet_id)
    {
        UserWallet::query()->where('id', $wallet_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }

    public function render()
    {
        $wallets = UserWallet::all();
        $users = User::all();
        return view('admin.livewire.wallet.index', ['wallets' => $wallets, 'users' => $users])->extends('admin.layouts.app');
    }
}
