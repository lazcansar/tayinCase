<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\userDetail;
use App\Models\City;

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
        return redirect()->route('login')->with('success', 'Kullanıcı kaydı başarılı şekilde oluşturuldu.');
    }
    // Register User Detail
    public function regUserDetail()
    {
        $name = 'Abdullah';
        $surname = 'GÖKSAL';
        $email = 'ab204376@adalet.gov.tr';
        $company = 'Adalet Bakanlığı - Gaziosmanpaşa Cumhuriyet Başsavcılığı';
        $phone = '0546 500 70 16';
        $address = 'Fatih Mah. 203 Sk. No:X D:X Esenler / İstanbul';
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
        return redirect()->route('login')->with('success', 'Kullanıcı detay kayıtları başarılı şekilde oluşturuldu.');
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

    // City Insert
    public function insertCity() {
        $cityNames = [
            'Adana Adliyesi',
            'Adıyaman Adliyesi',
            'Afyonkarahisar Adliyesi',
            'Ağrı Adliyesi',
            'Amasya Adliyesi',
            'Ankara Adliyesi',
            'Antalya Adliyesi',
            'Artvin Adliyesi',
            'Aydın Adliyesi',
            'Balıkesir Adliyesi',
            'Bilecik Adliyesi',
            'Bingöl Adliyesi',
            'Bitlis Adliyesi',
            'Bolu Adliyesi',
            'Burdur Adliyesi',
            'Bursa Adliyesi',
            'Çanakkale Adliyesi',
            'Çankırı Adliyesi',
            'Çorum Adliyesi',
            'Denizli Adliyesi',
            'Diyarbakır Adliyesi',
            'Edirne Adliyesi',
            'Elazığ Adliyesi',
            'Erzincan Adliyesi',
            'Erzurum Adliyesi',
            'Eskişehir Adliyesi',
            'Gaziantep Adliyesi',
            'Giresun Adliyesi',
            'Gümüşhane Adliyesi',
            'Hakkari Adliyesi',
            'Hatay Adliyesi',
            'Isparta Adliyesi',
            'Mersin Adliyesi',
            'İstanbul Adliyesi',
            'İzmir Adliyesi',
            'Kars Adliyesi',
            'Kastamonu Adliyesi',
            'Kayseri Adliyesi',
            'Kırklareli Adliyesi',
            'Kırşehir Adliyesi',
            'Kocaeli Adliyesi',
            'Konya Adliyesi',
            'Kütahya Adliyesi',
            'Malatya Adliyesi',
            'Manisa Adliyesi',
            'Kahramanmaraş Adliyesi',
            'Mardin Adliyesi',
            'Muğla Adliyesi',
            'Muş Adliyesi',
            'Nevşehir Adliyesi',
            'Niğde Adliyesi',
            'Ordu Adliyesi',
            'Rize Adliyesi',
            'Sakarya Adliyesi',
            'Samsun Adliyesi',
            'Siirt Adliyesi',
            'Sinop Adliyesi',
            'Sivas Adliyesi',
            'Tekirdağ Adliyesi',
            'Tokat Adliyesi',
            'Trabzon Adliyesi',
            'Tunceli Adliyesi',
            'Şanlıurfa Adliyesi',
            'Uşak Adliyesi',
            'Van Adliyesi',
            'Yozgat Adliyesi',
            'Zonguldak Adliyesi',
            'Aksaray Adliyesi',
            'Bayburt Adliyesi',
            'Karaman Adliyesi',
            'Kırıkkale Adliyesi',
            'Batman Adliyesi',
            'Şırnak Adliyesi',
            'Bartın Adliyesi',
            'Ardahan Adliyesi',
            'Iğdır Adliyesi',
            'Yalova Adliyesi',
            'Karabük Adliyesi',
            'Kilis Adliyesi',
            'Osmaniye Adliyesi',
            'Düzce Adliyesi',
        ];

        $dataToInsert = [];
        foreach ($cityNames as $name) {
            $dataToInsert[] = [
                'name' => $name,
            ];
        }

        City::insert($dataToInsert);

        return redirect()->route('login')->with('success', 'Şehirler başarılı şekilde oluşturuldu.');

    }




}
