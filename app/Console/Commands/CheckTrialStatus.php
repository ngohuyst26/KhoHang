<?php

namespace App\Console\Commands;

use App\Models\Tenant;
use Illuminate\Console\Command;

class CheckTrialStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trial:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kiểm tra trạng thái dùng thử của các tenant';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tenants = Tenant::whereNotNull('trial_ends_at')->get();

        foreach ($tenants as $tenant) {
            if ($tenant->trial_ends_at && $tenant->trial_ends_at->isPast()) {
                $tenant->plan = 'basic';
                $tenant->trial_ends_at = null;
                $tenant->save();
            }
        }
        $this->info('Đã kiểm tra trạng thái dùng thử của các tenant.');
    }
}
