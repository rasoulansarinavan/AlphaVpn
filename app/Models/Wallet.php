<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Wallet extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function deposit(array $formData)
    {
        // dd('dwad');
        Wallet::query()->create([
            'user_id' => Auth::user()->id,
            'wallet_address' => $formData['wallet_address'],
            'hash' => $formData['hash'],
            'type' => 'deposit',
            'amount' => $formData['amount'],
        ]);
    }

    public function withdrawal(array $formData)
    {
        // dd('dwad');
        Wallet::query()->create([
            'user_id' => Auth::user()->id,
            'wallet_address' => $formData['wallet_address'],
            'type' => 'withdraw',
            'amount' => $formData['amount'],
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
