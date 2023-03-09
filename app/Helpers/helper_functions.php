<?php

use App\Models\Order;
use App\Models\User;
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

function getTeamCountWithProfit($user_id): array
{
    $level = User::query()->where('user_id', $user_id)->pluck('id')->toArray();
    $commission_level = 3;

    $teams = [$level];

    for ($i = 1; $i <= $commission_level; $i++) {
        $level = User::query()->whereIn('user_id', $level)->pluck('id')->toArray();
        $teams[] = $level;
    }


    foreach ($teams as $key => $team) {
        $orders = Order::query()
            ->whereIn('user_id', $team)
            ->where('status', '=', 'confirmed')
            ->sum('price');
        $members[$key]['sale'] = $orders;
        $members[$key]['members'] = $team;

    }
    $profits = ['20', '10', '5', '5'];
    foreach ($profits as $key => $profit) {
        $members[$key]['profit'] = $profit;
    }
    return $members;
}
