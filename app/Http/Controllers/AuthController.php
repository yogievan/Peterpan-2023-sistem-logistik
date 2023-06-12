<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.Login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            
            if($user -> role == 'pemohon'){
                return redirect()->intended('/Dashboard-pemohon');
            }
            if($user-> role == 'pemasok'){
                return redirect()->intended('/Dashboard-Pemasok');
            }
            if($user->role == 'logistik'){
                return redirect()->intended('/Dashboard-logistik');
            }
            if($user->role == 'rektor'){
                return redirect()->intended('/Dashboard-Rektor');
            }
            if($user->role == 'wr3'){
                return redirect()->intended('/Dashboard-Wr3');
            }
            if($user->role == 'biro2'){
                return redirect()->intended('/Dashboard-Biro2');
            }
        }

        return back()->withErrors([
            'username' => 'Login Field!'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
