<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserInterface as UserInterface;

class UserController extends Controller
{
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->all();
        return view('users', compact('users'));
    }
}
