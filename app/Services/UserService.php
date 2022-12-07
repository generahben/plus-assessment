<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    public function __construct(
        private readonly UserRepository $userRepo
    )
    {
    }

    public function allUsers(): LengthAwarePaginator
    {
        return $this->userRepo->allUsers();
    }
}
