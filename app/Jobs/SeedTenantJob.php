<?php

namespace App\Jobs;

use App\Models\BrandInformation;
use App\Models\Category;
use App\Models\Introduction;
use App\Models\Option;
use App\Models\PaymentMethod;
use App\Models\PrivacyPolicy;
use App\Models\ReturnPolicy;
use App\Models\Supplier;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class SeedTenantJob implements ShouldQueue{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    protected $tenant;

    public function __construct(Tenant $tenant){
        $this->tenant = $tenant;
    }

    /**
     * Execute the job.
     */
    public function handle()
    : void{
        $this->tenant->run(function (){

            $categories = ['Áo Thun', 'Áo Polo', 'Áo sơ mi', 'Áo khoác', 'Hoodie'];
            foreach ($categories as $item){
                Category::create([
                    'name' => $item
                ]);
            }

            $suppliers = ['Công ty May Ngô Huy', 'Công ty TNHH MTV Huy ST', 'Công ty TNHH MTV Phúc ĐT', 'Công ty TNHH MTV Khang HG', 'Công ty TNHH Nam Can Ther'];
            foreach ($suppliers as $item){
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


            $options = ['Màu sắc', 'Kích thước'];
            foreach ($options as $item){
                Option::create([
                    'name' => $item
                ]);
            }

            Introduction::create([
                'introductions' => 'Giới thiệu đây,  đây là giới thiệu'
            ]);

            BrandInformation::create([
                'logo'       => 'logos/logo_v2.png',
                'name_brand' => "Brix",
            ]);

            PrivacyPolicy::create([
                'privacy_policy' => 'Trang chính sách bảo mật.'
            ]);

            ReturnPolicy::create([
                'return_policy' => 'Trang chính sách đổi trả.'
            ]);

            $user->wallet()->create([
                'balance' => 0
            ]);
            $user->assignRole('admin');
        });
    }
}
