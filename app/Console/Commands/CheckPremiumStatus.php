<?php

namespace App\Console\Commands;

use App\Models\Tenant;
use Illuminate\Console\Command;

class CheckPremiumStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:check-expiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kiểm tra ngày hết hạn gói Premium cho tất cả tenants.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tenants = Tenant::where('plan', 'premium')->get();

        foreach ($tenants as $tenant) {
            if ($tenant->isSubscriptionExpired()) {
                $this->info("Tenant {$tenant->id}: Gói Premium đã hết hạn.");
            } else {
                $daysLeft = $tenant->subscriptionDaysLeft();
                $this->info("Tenant {$tenant->id}: Gói Premium còn $daysLeft ngày.");
            }
        }
    }
}
