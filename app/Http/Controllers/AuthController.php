<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class AuthController extends Controller
{
    public function registerAuth(User $user, Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
            'image' => 'string|max:255|nullable'
        ]);

        $user::create([
            'username' => $request->username,
            'email' => $request->email,
            'image' => $request->image,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('auth.loginpage.index');
    }
    public function loginAuth(Request $request)
    {
        $credetials = ['email' => $request->email,'password' => $request->password,];
        $remember = $request->remember;
        if (Auth::attempt($credetials, $remember)) {
            return redirect()->route('pages.dashboardpage.index')->with('success', 'Login berhasil');
        }
        return back()->with('error', 'Email or Password might be incorrect');
    }

    public function loginAuthGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginAuthCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            /* dd($user); */
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'username' => $user->user['name'],
                    'image' => $user->user['picture'],
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt(env('DEFAULT_USER_PASSWORD'))
                ]);
                Auth::login($newUser);
                return redirect()->route('pages.dashboardpage.index'); 
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function logoutAuth()
    {
        Auth::logout();
        return redirect()->route('auth.loginpage.index')->with('logout', 'Your successfully Logout');
    }
}
