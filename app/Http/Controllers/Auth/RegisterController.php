<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:4',
            'username' => 'required|min:3|max:20|unique:users',
            'email' => 'required|max:100|unique:users|email',
            'password' => 'required|min:5|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username
        ]);

        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('home.index');
    }
}
