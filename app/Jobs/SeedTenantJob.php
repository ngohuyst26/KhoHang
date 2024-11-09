<?php

namespace App\Jobs;

use App\Models\Category;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class SeedTenantJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    protected $tenant;
    public function __construct(Tenant $tenant)
    {
        $this->tenant = $tenant;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->tenant->run(function (){

            $categories = ['shoes','clothing','underwear'];
            foreach ($categories as  $item){
                Category::create([
                    'name' => $item
                ]);
            }

            $suppliers = ['FPT','Viettel','Mobi'];
            foreach ($suppliers as  $item){
                Supplier::create([
                    'name' => $item
                ]);
            }

            $payment_methods = ['wallet','momo','vnpay'];
            foreach ($payment_methods as  $item){
                PaymentMethod::create([
                    'name' => $item
                ]);
            }

            $user = User::create([
                'name'     => $this->tenant->name,
                'email'    => $this->tenant->email,
                'password' => $this->tenant->password
            ]);
            $user->customer()->create([
                'name' => $user->name,
                'email' => $user->email,
            ]);
            $user->assignRole('admin');
        });
    }
}
