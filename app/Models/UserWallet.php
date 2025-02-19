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

        UserWallet::query()->updateOrCreate(
            [
                'user_id' => Auth::user()->id,
            ],
            [
                'id' => $wallet_id,
                'address_wallet' => $formData['address_wallet']
            ],
        );
    }


    public function parent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
