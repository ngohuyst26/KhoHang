<?php

namespace App\Models;

use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    protected $fillable = [
        'id',
        'name',
        'email',
        'plan',
        'password',
        'trial_ends_at',
        'has_used_trial'
    ];

    public static function  getCustomColumns(): array{
        return [
            'id',
            'name',
            'email',
            'plan',
            'password',
            'trial_ends_at',
            'has_used_trial'
        ];
    }

    public function hasPlan($plan)
    {
        return $this->plan === $plan;
    }

    public function setPasswordAttribute($val)
    : string{
        return $this->attributes['password'] = bcrypt($val);
    }

    public function activateTrial()
    {
        if ($this->has_used_trial) {
            throw new \Exception('Bạn đã sử dụng gói dùng thử trước đó.');
        }

        $this->plan = 'premium';
        $this->trial_ends_at = now()->addDays(7);
        $this->has_used_trial = true;
        $this->save();
    }

    public function isOnTrial()
    {
        return $this->trial_ends_at && now()->lessThanOrEqualTo($this->trial_ends_at);
    }
}