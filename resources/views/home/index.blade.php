@extends('theme')
@section('title'){{ 'Kişisel Bilgilerim' }}@endsection
@section('main')

    <section class="bg-sky-800 py-4">
        <div class="container mx-auto">
            @auth
                <h1 class="text-white text-2xl text-center"> {{ Auth::user()->name }} - Personel Ekranı </h1>
            @else
                <h1 class="text-white text-2xl text-center">Personel Ekranı</h1>
            @endauth
        </div>
    </section>

    <section class="my-8">
        <div class="container mx-auto">
            <div class="border border-gray-200 shadow p-4 rounded">
                <div class="flex flex-row flex-wrap items-center justify-between">
                    <div class="w-full md:w-1/2 p-2">
                        <div class="px-4 py-2 bg-sky-100 rounded">
                            <strong>Ad Soyad:</strong> {{ $userDetail->name }} {{ $userDetail->surname }}
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

@endsection
