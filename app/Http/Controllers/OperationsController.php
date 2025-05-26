<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\userDetail;

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
    // Register User Detail
    public function regUserDetail()
    {
        $name = 'Abdullah';
        $surname = 'GÖKSAL';
        $email = 'ab204376@adalet.gov.tr';
        $company = 'Adalet Bakanlığı - Gaziosmanpaşa Cumhuriyet Başsavcılığı';
        $phone = '0546 500 70 16';
        $address = 'Fatih Mah. 203 Sk. No:29 D:6 Esenler / İstanbul';
        $vac = '30';
        $kadro = '7/2';
        $startyear = '10.02.2017';

        userDetail::create([
            'users_id' => '1',
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'company' => $company,
            'phone' => $phone,
            'address' => $address,
            'vac' => $vac,
            'kadro' => $kadro,
            'startyear' => $startyear,
        ]);
        return redirect()->route('login');
    }


    // Auth
    public function loginUser(Request $request): RedirectResponse {
        $customMessages = [
            'name.required' => 'Sicil No girilmesi zorunludur!',
            'password.required' => 'Şifre alanı zorunludur!',
            'password.min' => 'Şifreniz en az :min karakter olmalıdır.',
        ];


        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
            ], $customMessages);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'name' => 'Girilen sicil numarası veya şifre hatalıdır. Lütfen bilgilerinizi kontrol edip tekrar deneyin.',
        ])->onlyInput('name');

    }


    // Logout
    public function logout(): RedirectResponse {
            Auth::logout();
            return redirect('/giris-yap');
    }




}
