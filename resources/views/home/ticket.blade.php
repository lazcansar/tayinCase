@extends('theme')
@section('title'){{ 'Tayin Talebi Oluştur' }}@endsection
@section('main')

    <section class="bg-sky-800 py-4 px-4 lg:px-0">
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
    <section class="bg-teal-200">
        <div class="container mx-auto py-2">
            <nav aria-label="breadcrumb" class="font-medium text-gray-500">
                <ol class="list-none p-0 inline-flex space-x-2">
                    <li class="flex items-center">
                        <a href="{{ route('home') }}" class="hover:text-sky-700 hover:underline">Anasayfa</a>
                    </li>
                    <li class="flex items-center" aria-current="page">
                        <svg class="fill-current w-3 h-3 mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-700">Tayin Talebi Oluştur</span> </li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="my-8">
        <div class="container mx-auto">
            <div class="border border-gray-200 shadow p-4 rounded">
                <h2 class="text-xl p-4 bg-sky-500 text-white rounded mb-4">Tayin Talebi Oluştur</h2>
                @if(session('success'))
                    <div class="bg-amber-500 p-4 mb-4 text-white rounded">
                        <p><i class="bi bi-info-circle"></i> {{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('ticketSend') }}" method="POST">
                    @csrf

                    <div class="relative w-full mb-4">
                        <select name="changetype"
                                class="w-full appearance-none border border-gray-300 rounded-md pl-3 pr-10 py-2 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 shadow-sm">
                            <option selected disabled>Talep Türü</option>
                            <option value="Tayin Talebi">Tayin talebi</option>
                            <option value="Tayin talebim uygun görülmezse yerimde kalmak istiyorum.">Tayin talebim uygun görülmezse yerimde kalmak istiyorum.</option>
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
                @if($errors->any())
                    <div class="bg-amber-800 p-4 text-white rounded">
                        <ul class="flex flex-col gap-2">
                            @foreach($errors->all() as $error)
                                <li><i class="bi bi-info-circle"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="my-8">
        <div class="container mx-auto">
            <div class="border border-gray-200 shadow p-4 rounded">
                <h2 class="text-xl p-4 bg-teal-600 text-white rounded mb-4">Geçmiş Tayin Talepleri</h2>
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-sky-500">
                        <tr>
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
                                Oluşturulma Tarihi
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">İşlemler</span> </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @if($allTickets)
                        @foreach($allTickets as $ticket)
                            <tr>
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

@endsection
