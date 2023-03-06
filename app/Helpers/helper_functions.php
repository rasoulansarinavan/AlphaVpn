<?php

use App\Models\Wallet;

function user_wallet($user_id)
{
    $deposit = Wallet::query()->where([
        'user_id' => $user_id,
        'status' => 'confirmed',
    ])->whereIn('type', ['deposit', 'commission'])->sum('amount');
    $withdraw = Wallet::query()->where([
        'user_id' => $user_id,
        'status' => 'confirmed',
    ])->whereIn('type', ['withdraw', 'buy'])->sum('amount');;

    return ($deposit - $withdraw);
}
