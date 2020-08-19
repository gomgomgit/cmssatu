<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['logout']);
        $this->middleware('guest')->except(['logout']);
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $isSucess = Auth::attempt($credentials);

        if ($isSucess) {
            return redirect()->intended('/admin/');
        } else {
            return redirect()->back()->withInput($request->except('password'))->with(['error' => 'Wrong password or this account not register yet.']);
        }
    }

    public function register()
    {
        return view('admin.auth.register');
    }

    public function registerProcess(Request $request)
    {
        $encrypted = bcrypt($request->password);

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'min:6|required_with:passwordRepeat|same:passwordRepeat',
        ]);

        $request->merge([
            'password' => $encrypted,
            'role' => 'author',
        ]);

        User::create($request->all());
        return redirect('/admin/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');

    }
}
