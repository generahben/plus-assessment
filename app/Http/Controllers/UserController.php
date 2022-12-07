<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //TODO:: These injections are supposed to be done via interfaces
    //TODO: or I could have used a facade. But since this is not a production grade app, I've chosen to keep thing short
    public function __construct(
        private readonly UserService $userService
    )
    {
    }

    public function index(): View
    {
        $users = $this->userService->allUsers();
        return view('user.index', [
            'users' => $users
        ]);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): View
    {
        $this->authorize('create new user');
        return view('user.create');
    }

    public function show(int $id): View
    {
        return view('user.show');
    }
}
