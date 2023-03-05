<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Deposit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function deposit(array $formData)
    {
       // dd('dwad');
        Deposit::query()->create([
            'user_id' => Auth::user()->id,
            'wallet_address' => $formData['wallet_address'],
            'hash' => $formData['hash'],
            'amount' => $formData['amount'],
        ]);
    }
}
