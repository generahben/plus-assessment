<?php

declare(strict_types=1);

namespace App\Enum;

enum UserRole: string
{
    case ADMIN = 'Admin';
    case USER = 'User';
    case CONTENT_MANAGER = 'Content Manager';

}
