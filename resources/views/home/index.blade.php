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

@endsection
