<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveUserWallet($formData, $wallet_id)
    {
        UserWallet::query()->updateOrCreate(
            [
                'id' => $wallet_id
            ],
            [
                'user_id' => $formData['user_id'],
                'address_wallet' => $formData['address_wallet']
            ]
        );
    }


    public function parent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
