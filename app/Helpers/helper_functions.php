<?php

use App\Models\Order;
use App\Models\TransactionHistory;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Http;


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
    $commission_level = 2;

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
    $profits = ['20', '10', '5'];
    foreach ($profits as $key => $profit) {
        $members[$key]['profit'] = $profit;
    }
    return $members;
}

//for Destination USDT wallet address
function transactionHistory()
{

    $response = Http::get('https://apilist.tronscan.org/api/transaction?sort=-timestamp&count=true&limit=10&start=0&address=TKpiZFZFvFJFc5C7Pe47tQxpUuM56Y4mTk');

    if ($response->status() == 200) {
        $data = $response->json()['data'];

        $hash = [];
        foreach ($data as $item) {
            if ($item['confirmed']) {
                $transaction = TransactionHistory::query()->updateOrCreate(
                    [
                        'ownerAddress' => $item['ownerAddress'],
                        'hash' => $item['hash'],
                    ],
                    [
                        'ownerAddress' => $item['ownerAddress'],
                        'hash' => $item['hash'],
                        'amount' => $item['trigger_info']['parameter']['_value'],
                        'created_at' => \Carbon\Carbon::createFromTimestampMs($data[0]['timestamp'])->format('Y-m-d H:i:s'),
                    ]);

                Wallet::query()->where('hash', $item['hash'])->update(['amount' => ($item['trigger_info']['parameter']['_value']) / 1000000]);

                $hash[] = $transaction->hash;
            }
        }

        Wallet::query()->whereIn('hash', $hash)->update(['status' => 'confirmed']);

    }
}

function getTeamCount($user_id): array
{
    $level = User::query()->where('user_id', $user_id)->pluck('id')->toArray();
    $commission_level = 2;

    $teams = [implode(',', $level)];

    for ($i = 1; $i <= $commission_level; $i++) {
        $level = User::query()->whereIn('user_id', $level)->pluck('id')->toArray();
        $teams[] = implode(',', $level);
    }
    return $teams;
}
