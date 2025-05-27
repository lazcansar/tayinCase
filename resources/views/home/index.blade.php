@extends('theme')
@section('title'){{ 'Kişisel Bilgilerim' }}@endsection
@section('main')

    <section class="bg-sky-800 py-4 px-4 lg:px-0">
        <div class="container mx-auto">
            @auth
                <div class="flex flex-row items-center justify-between">
                    <h1 class="text-white text-2xl text-center"> Personel Ekranı </h1>
                    <a href="{{ route('logout') }}" class="text-gray-800 border border-gray-300 px-2 py-1 rounded bg-sky-100 transition hover:bg-sky-50"><i class="bi bi-door-closed"></i> Çıkış Yap</a>
                </div>
            @else
                <h1 class="text-white text-2xl text-center">Personel Ekranı</h1>
            @endauth
        </div>
    </section>

    @if(Auth::user()->role == 1)
        <section class="my-8">
            <div class="container mx-auto">
                <div class="border border-gray-200 shadow p-4 rounded">
                    <h2 class="text-xl p-4 bg-sky-600 text-white rounded mb-4">Tayin Talepleri</h2>
                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-sky-500">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Talep Eden
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Talep Türü
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Tayin İstenen Şehir
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Mesaj
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Talep Tarihi
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @php
                                $allUsers = \App\Models\User::all(); // Tüm kullanıcıları çek
                            @endphp
                            @if($allTickets)
                                @foreach($allTickets as $ticket)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 capitalize">
                                                    @foreach($allUsers as $user)
                                                        @if($user->id == $ticket->user_id)
                                                            {{ $user->name }}
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 capitalize">{{ $ticket->changetype }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">
                                                    @foreach($cities as $city)
                                                        @if($city->id == $ticket->city_id)
                                                            {{ $city->name }}
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-700 max-w-xs truncate">
                                                    {{ $ticket->message }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $ticket->created_at }}</div>
                                            </td>
                                        </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                                        Gösterilecek talep bulunamadı.
                                    </td>
                                </tr>
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(Auth::user()->role == 0)
        <section class="my-8">
            <div class="container mx-auto">
                <div class="border border-gray-200 shadow p-4 rounded">
                    <h2 class="text-xl p-4 bg-sky-500 text-white rounded mb-4">Personel Bilgileri</h2>
                    <div class="flex flex-row flex-wrap items-center justify-between text-gray-800">
                        <div class="w-full md:w-1/2 p-2">
                            <div class="px-4 py-2 bg-sky-100 rounded">
                                <strong>Ad Soyad:</strong> {{ $userDetail->name }} {{ $userDetail->surname }}
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 p-2">
                            <div class="px-4 py-2 bg-sky-100 rounded">
                                <strong>Sicil No:</strong> {{ Auth::user()->name }}
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 p-2">
                            <div class="px-4 py-2 bg-sky-100 rounded">
                                <strong>E-Mail:</strong> {{ $userDetail->email }}
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 p-2">
                            <div class="px-4 py-2 bg-sky-100 rounded">
                                <strong>Telefon Numarası:</strong> {{ $userDetail->phone }}
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-2">
                            <div class="px-4 py-2 bg-sky-100 rounded">
                                <strong>Çalıştığı Kurum:</strong> {{ $userDetail->company }}
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-2">
                            <div class="px-4 py-2 bg-sky-100 rounded">
                                <strong>İkamet Adresi:</strong> {{ $userDetail->address }}
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 p-2">
                            <div class="px-4 py-2 bg-sky-100 rounded">
                                <strong>Yıllık İzin:</strong> {{ $userDetail->vac }}
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 p-2">
                            <div class="px-4 py-2 bg-sky-100 rounded">
                                <strong>Kadro / Derece:</strong> {{ $userDetail->kadro }}
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 p-2">
                            <div class="px-4 py-2 bg-sky-100 rounded">
                                <strong>İşe Başlama Tarihi:</strong> {{ $userDetail->startyear }}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="my-8">
            <div class="container mx-auto">
                <div class="border border-gray-200 shadow p-4 rounded">
                    <h2 class="text-xl p-4 bg-sky-500 text-white rounded mb-4">Talep Ekranı</h2>
                    <a href="{{ route('ticket') }}" class="px-4 py-2 inline-block bg-teal-700 transition hover:bg-teal-600 text-white">Tayin Talebinde Bulun!</a>
                </div>
            </div>
        </section>
    @endif


@endsection
