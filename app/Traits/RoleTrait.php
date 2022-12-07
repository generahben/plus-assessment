<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Role;
use App\Models\UserHasRole;
use Illuminate\Support\Facades\Auth;

trait RoleTrait
{
    public function hasRole(string $roleName): bool
    {
        $rolesId = UserHasRole::where('user_id', Auth::id())->pluck('role_id')->toArray();
        $roleNameId = Role::where('name', $roleName)->value('id');

        return in_array($roleNameId, $rolesId);
    }
}
