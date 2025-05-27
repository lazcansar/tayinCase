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
            </div>

        </div>
    </section>

@endsection
