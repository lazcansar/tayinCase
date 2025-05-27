@extends('theme')
@section('title'){{ 'Kişisel Bilgilerim' }}@endsection
@section('main')

    <section class="bg-sky-800 py-4">
        <div class="container mx-auto">
            @auth
                <div class="flex flex-row items-center justify-between">
                    <h1 class="text-white text-2xl text-center"> Personel Ekranı - Tayin Talebi </h1>
                    <a href="{{ route('logout') }}" class="text-gray-800 border border-gray-300 px-2 py-1 rounded bg-sky-100 transition hover:bg-sky-50"><i class="bi bi-door-closed"></i> Çıkış Yap</a>
                </div>
            @else
                <h1 class="text-white text-2xl text-center">Personel Ekranı</h1>
            @endauth
        </div>
    </section>

    <section class="my-8">
        <div class="container mx-auto">
            <div class="border border-gray-200 shadow p-4 rounded">
                <h2 class="text-xl p-4 bg-sky-500 text-white rounded mb-4">Tayin Talebi Oluştur</h2>


                <form action="" method="POST">
                    @csrf

                    <div class="relative w-full mb-4">
                        <select name="changetype"
                                class="w-full appearance-none border border-gray-300 rounded-md pl-3 pr-10 py-2 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 shadow-sm">
                            <option selected disabled>Talep Türü</option>
                            <option value="">Tayin talebi</option>
                            <option value="">Tayin talebim uygun görülmezse yerimde kalmak istiyorum.</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="relative w-full mb-4">
                        <select name="cities"
                                class="w-full appearance-none border border-gray-300 rounded-md pl-3 pr-10 py-2 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 shadow-sm">
                            <option selected disabled>Adliye Seçimi Yapın</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                            </svg>
                        </div>
                    </div>

                    <textarea name="message" class="mb-4 w-full appearance-none border border-gray-300 rounded-md pl-3 pr-10 py-2 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 shadow-sm" placeholder="Açıklama yazın"></textarea>

                    <button class="px-4 py-2 bg-sky-600 text-white rounded transition hover:bg-sky-500 cursor-pointer">Talep Gönder</button>

                </form>
            </div>
        </div>
    </section>

@endsection
