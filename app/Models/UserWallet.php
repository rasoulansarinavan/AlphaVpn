<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserWallet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveAddressWallet($formData, $wallet_id)
    {
        if (isset($formData['address_wallet']))
            UserWallet::query()->update(
                [
                    'id' => $wallet_id,
                    'user_id' => Auth::user()->id,
                    'address_wallet' => $formData['address_wallet']
                ]
            );
        else {
            UserWallet::query()->create(
                [
                    'id' => $wallet_id,
                    'user_id' => Auth::user()->id,
                    'address_wallet' => $formData['address_wallet']
                ]
            );
        }
    }


    public function parent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
