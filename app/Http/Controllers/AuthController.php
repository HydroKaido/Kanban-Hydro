<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerAuth(User $user, Request $request){
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);
    
        $user::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('auth.loginpage.index');
    }
    public function loginAuth(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            return redirect()->route('pages.dashboardpage.index')->with('success', 'Login berhasil');
        }
        return back()->with('error', 'Email or Password might be incorrect');
    }

    public function logoutAuth(){
        Auth::logout();
        return redirect()->route('auth.loginpage.index')->with('logout', 'Your successfully Logout');
    }
}
