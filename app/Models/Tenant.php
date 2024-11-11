<?php

namespace App\Models;

use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    public static function  getCustomColumns(): array{
        return [
            'id',
            'name',
            'email',
            'plan',
            'password'
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
}