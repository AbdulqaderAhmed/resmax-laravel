<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    public function login()
    {
        return view('pages.admin.login');
    }

    public function register()
    {
        return view('pages.admin.register');
    }

    public function customRegister(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string',
        ]);

        $user = User::create($request->all());

        return view('pages.client.index');
    }

    public function customeLogin(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($cred)) {
            return view('pages.client.dashboard');
        }

        return view('pages.client.index');
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
