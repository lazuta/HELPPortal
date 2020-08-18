<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        $users = User::where('public', true)->where('status', 'active')->where('status', 'work')->get();
        $roles = Role::get()->all();

        return view('help', [
            'users' => $users,
            'roles' => $roles
        ]);
    }    
}
