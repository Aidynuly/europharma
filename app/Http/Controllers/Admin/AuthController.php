<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Moderator;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->only('name', 'password');

        if (!User::where('name', $request['name'])->where('role', User::ROLE_ADMIN)->exists()) {
            return redirect()->back()->withErrors(['message' => 'У вас нет доступа!']);
        } else if (Auth::attempt($credentials)) {
            return redirect()->route('admin.main');
        }

        return redirect()->back()->withErrors(['message' => 'Неправильный пароль!']);
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
