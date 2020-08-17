<?php

namespace App\Http\Controllers;

use App\User;
use App\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => ['required'],
        ],[
            'status.required' => 'Статус не может быть пустым.',
        ]);

        User::find($id)->update([
            'status' => $request['status']
        ]);

        return redirect()->route('home');
    }

    public function updateInf(Request $request, $id)
    {
        $validatedData = $request->validate([
            'role' => ['required'],
            'descr' => ['required', 'string', 'max:255']
        ],[
            'role.required' => 'Роль не может быть пустой.',
            'descr.required' => 'Описание не может быть пустым.'
        ]);

        User::find($id)->update([
            'description' => $request['descr'],
            'role' => $request['role']
        ]);
        
        return redirect()->route('home');
    }
}
