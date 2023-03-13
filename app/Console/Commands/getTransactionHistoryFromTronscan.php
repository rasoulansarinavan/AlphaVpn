<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class getTransactionHistoryFromTronscan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transaction:history';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get transactions history from tronscan when deposit time';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        transactionHistory();

    }
}
