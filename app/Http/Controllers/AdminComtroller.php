<?php

namespace App\Http\Controllers;

use app\User;
use Illuminate\Http\Request;

class AdminComtroller extends Controller
{
    public function show() {
        $users = User::where('public', false)->where('status', 'active')->get();

        return view('admin', [
            'users' => $users,
        ]);
    }

    public function ok(Request $request, $id)
    {
        User::find($id)->update([
            'public' => true
        ]);

        return redirect()->view('admin');
    }

    public function no(Request $request, $id)
    {
        User::find($id)->update([
            'description' => '',
            'role' => null,
            'public' => false
        ]);

        return redirect()->view('admin');
    }
}
