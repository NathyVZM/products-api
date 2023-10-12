<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|max:100|unique:users|email',
            'password' => 'required|min:5|confirmed'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('message', 'Wrong credentials');
        }

        return redirect()->route('home.index');
    }
}
