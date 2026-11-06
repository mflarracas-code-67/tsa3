<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display the user profile.
     */
    public function index(): View
    {
        $user = User::first();

        return view('profile', [
            'user' => $user,
        ]);
    }
}