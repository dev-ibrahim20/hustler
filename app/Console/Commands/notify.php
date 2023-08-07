<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email Notify For All Users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = Order::select('email')->get();
        $emails = Order::pluck('email')->toArray();

        // foreach ($emails as email) {
        // }
    }
}
