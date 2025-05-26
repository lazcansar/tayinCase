<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class OperationsController extends Controller
{
    // Register User
    public function regUser() {
        $name = 'ab204376';
        $email = 'ab204376@adalet.gov.tr';
        $password = '12345678';

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

    }

    // Auth
    public function loginUser(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required', 'string'],
            ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'name' => 'Kayıtlı sicil numarası bulunamadı!',
        ])->onlyInput('name');

    }


    // Logout
    public function logout(): RedirectResponse {
            Auth::logout();
            return redirect('/giris-yap');
    }




}
