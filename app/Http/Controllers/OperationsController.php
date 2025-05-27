<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\userDetail;
use App\Models\City;
use App\Models\Changeticket;
use Illuminate\Support\Facades\Log;

class OperationsController extends Controller
{
    // Register User
    public function regUser() {
        $name = 'ab204376';
        $email = 'ab204376@adalet.gov.tr';
        $password = '12345678';
        $role = '0';

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => $role,
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

            Log::info('Giriş işlemi başarılı şekilde gerçekleşti.', [
                'user_id' => Auth::id(),
                'user_name' => Auth::user()->name,
                'ip_address' => $request->ip(),
                'session_id' => $request->session()->getId(),
            ]);

            return redirect()->intended('/');
        }
        Log::error('Giriş işlemi hatalı!', [
            'ip_address' => $request->ip(),
            'session_id' => $request->session()->getId(),
            'request_all' => $request->all(),
        ]);
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

    // Insert Change Ticket
    public function ticketSend(Request $request)
    {
        $validatedData = $request->validate([
            'changetype' => ['required', 'string'],
            'cities' => ['required', 'integer', 'exists:cities,id'], // cities tablosunda şehir id'si olmalı
            'message' => ['required', 'string', 'min:10', 'max:1000'], // Minimum 10, maksimum 1000 karakter
        ], [
            'changetype.required' => 'Lütfen bir talep türü seçin.',
            'changetype.in' => 'Geçersiz talep türü seçimi.',
            'cities.required' => 'Lütfen bir adliye seçimi yapın.',
            'cities.integer' => 'Adliye seçimi geçersiz.',
            'cities.exists' => 'Seçilen adliye bulunamadı.',
            'message.required' => 'Açıklama alanı boş bırakılamaz.',
            'message.min' => 'Açıklama en az :min karakter olmalıdır.',
            'message.max' => 'Açıklama en fazla :max karakter olabilir.',
        ]);

        try {
            $ticket = Changeticket::create([
                'user_id' => Auth::id(),
                'changetype' => $validatedData['changetype'],
                'city_id' => $validatedData['cities'],
                'message' => $validatedData['message'],
            ]);

            Log::info('Talep gönderme başarılı şekilde gerçekleşti.', [
                'user_id' => Auth::id(),
                'request_data' => $request->all(),
            ]);

            return redirect()->route('ticket')->with('success', 'Talebiniz başarıyla gönderildi.');
        } catch (\Exception $e) {
            Log::error('Talep gönderme sırasında bir hata oluştu.', [
                'user_id' => Auth::id(), // Hangi kullanıcı bu hatayı aldı?
                'request_data' => $request->all(), // Hangi verilerle hata alındı? (Hassas veri olmamasına dikkat edin)
                'exception_message' => $e->getMessage(),
                'exception_trace' => $e->getTraceAsString(), // Daha detaylı hata takibi için (log dosyasını büyütebilir)
            ]);

            return back()->withErrors(['error' => 'Talebiniz gönderilirken bir hata oluştu. Lütfen tekrar deneyin.']);
        }

    }




}
