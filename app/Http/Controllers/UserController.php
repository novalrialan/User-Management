<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.registrasi');
    }


    public function auth(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|min:5|max:120',
                'password' => 'required|min:8|max:255',
            ]);

            $getemail = $request->email;
            $getpassword = $request->password;


            if (Auth::attempt(['email' => $getemail, 'password' => $getpassword])) {
                $request->session()->regenerate();

                return redirect()->intended('/master');
            }
            // return redirect()->view('master');
        } catch (\Throwable $th) {
            //throw $th;
            // Redirect kembali dengan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan saat login. Silakan periksa email dan password anda');
        }
    }
    public function registerstore(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required|min:4|max:250',
                'email' => 'required|min:5|max:120',
                'password' => 'required|min:8|max:255',
            ]);

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            // return redirect()->intended('/')->with('success', 'Selamat anda sudah teregister');
            return redirect()->back()->with('success', 'Selamat anda sudah ter register');
        } catch (\Throwable $th) {


            // Redirect kembali dengan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }
}
