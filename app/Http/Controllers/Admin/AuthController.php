<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Moderator;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request): RedirectResponse
    {
        $moderator = Moderator::where('login', $request['email'])->first();
        if ($moderator) {
            if (Hash::check($request['password'], $moderator['password'])) {
                session()->put('vK68TF23TfYKYDBZSCC9', 1);
                session()->put('admin', 1);
                session()->save();

                return redirect()->route('admin.main');
            } else {
                return back()->withErrors('Пароль неверно');
            }
        }
        return back()->withErrors('Wrong login!');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
