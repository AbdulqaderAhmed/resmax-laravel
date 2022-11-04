<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminsController extends Controller
{
    /**
     * It returns the view `pages.admin.login`
     * 
     * @return The login view is being returned.
     */
    public function login()
    {
        return view('pages.admin.login');
    }

    /**
     * It returns the view located at `resources/views/pages/admin/register.blade.php`
     * 
     * @return The view pages.admin.register
     */
    public function register()
    {
        return view('pages.admin.register');
    }

    /**
     * It takes the request, validates it, creates a user, and returns the view
     * 
     * @param Request request The request object.
     * 
     * @return The view 'pages.client.index'
     */
    public function customRegister(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return view('pages.admin.login');
    }


    /**
     * It creates a new user in the database
     * 
     * @param array data The array of data that was submitted by the user.
     * 
     * @return A new user is being created.
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * It takes the email and password from the request, validates them, and if they are valid, it
     * attempts to log the user in
     * 
     * @param Request request The request object.
     * 
     * @return The view of the client dashboard.
     */
    public function customeLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view('pages.client.index');
        }

        return view('pages.admin.login');
    }

    /**
     * It logs the user out and redirects them to the login page
     * 
     * @return A redirect to the login page.
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
