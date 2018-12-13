<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Get all users.
     *
     * @return User[]
     */
    public function index()
    {
        return User::all();
    }
}
