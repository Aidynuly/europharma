<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function main()
    {
        return view('admin.main');
    }

    public function login()
    {
        if (Auth::user()) {
            return redirect()->route('admin.main');
        }

        return view('admin.login');
    }
}
