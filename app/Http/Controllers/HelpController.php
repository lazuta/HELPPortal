<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        $users = User::where('status', 'active')->get();

        return view('help', [
            'users' => $users
        ]);
    }
}
