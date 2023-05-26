<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        // if($user = Auth::user()){
        //     if($user->jabatan == 'Pemohon'){
        //         return redirect()->intended('pemohon');
        //     }elseif($user->jabatan == 'Pemasok'){
        //         return redirect()->intended('pemasok');
        //     }elseif($user->jabatan == 'Logistik'){
        //         return redirect()->intended('logistik');
        //     }elseif($user->jabatan == 'Rektor'){
        //         return redirect()->intended('rektor');
        //     }elseif($user->jabatan == 'Wr3'){
        //         return redirect()->intended('wr3');
        //     }elseif($user->jabatan == 'Biro2'){
        //         return redirect()->intended('biro2');
        //     }
        // }
        return view('Auth.Login');
    }

    public function Proseslogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $input = $request->only('username','password');
        if(Auth::attempt($input)){
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->jabatan == 'Pemohon'){
                return redirect()->intended('Dashboard_Pemohon');
            }elseif($user->jabatan == 'Pemasok'){
                return redirect()->intended('Dashboard_Pemasok');
            }elseif($user->jabatan == 'Logistik'){
                return redirect()->intended('Dashboard_Logistik');
            }elseif($user->jabatan == 'Rektor'){
                return redirect()->intended('Dashboard_Rektor');
            }elseif($user->jabatan == 'Wr3'){
                return redirect()->intended('Dashboard_Wr3');
            }elseif($user->jabatan == 'Biro2'){
                return redirect()->intended('Dashboard_Biro2');
            }
            
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Maaf Username atau Password anda Salah'
        ])->onlyInput('username');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
