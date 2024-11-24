<?php

namespace App\Models;

use Carbon\Carbon;
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

    protected $casts = [
        'trial_ends_at' => 'datetime',
    ];

    public function hasPlan($plan)
    {
        return $this->plan === $plan;
    }

    public function setPasswordAttribute($val)
    : string{
        return $this->attributes['password'] = bcrypt($val);
    }

    public function isOnTrial()
    {
        return $this->trial_ends_at && now()->lessThanOrEqualTo($this->trial_ends_at);
    }

    public function trialDaysLeft(): int
    {
        if ($this->trial_ends_at && now()->lessThanOrEqualTo($this->trial_ends_at)) {
            $diffInHours = now()->diffInHours(Carbon::parse($this->trial_ends_at));
            return (int) ceil($diffInHours / 24);
        }

        return 0;
    }
}