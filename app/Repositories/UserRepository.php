<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepository
{

    public function allUsers(): LengthAwarePaginator
    {
        return User::with('userRoles')->paginate(10);
    }
}
