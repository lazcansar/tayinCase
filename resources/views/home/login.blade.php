@extends('theme')
@section('title'){{'Giriş Paneli'}}@endsection
@section('main')
    <section class="bg-sky-800 py-4 px-4 lg:px-0">
        <div class="container mx-auto">
            <h1 class="text-white text-2xl text-center">Personel Tayin Talep Ekranı</h1>
        </div>
    </section>
    <section class="py-8">
        <div class="container mx-auto flex items-center justify-center">
            <div class="md-w-lg sm:min-w-xl flex flex-col items-center justify-center border border-gray-100 shadow-lg rounded p-4">
                <i class="bi bi-person-bounding-box text-4xl text-sky-600 mb-4"></i>
                <h1 class="text-xl mb-4 font-medium text-gray-800">Giriş Paneli</h1>
                @if(session('success'))
                    <div class="bg-amber-500 p-4 my-4 text-white rounded">
                        <p><i class="bi bi-info-circle"></i> {{ session('success') }}</p>
                    </div>
                @endif
                <form action="{{ route('login.post') }}" method="POST" class="w-full">
                    <div class="flex flex-col gap-4 w-full">
                        @csrf
                        <div class="flex flex-col gap-2">
                            <label for="personNumber">Sicil Numarası</label>
                            <input type="text" class="w-full px-2 py-1 border border-gray-300 rounded outline-0 focus:outline-0 focus:shadow text-gray-800" name="name" placeholder="Sicil Numaranız" id="personNumber">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="password">Şifre</label>
                            <input type="password" class="w-full px-2 py-1 border border-gray-300 rounded outline-0 focus:outline-0 focus:shadow" name="password" id="password" placeholder="******">
                        </div>
                        <button class="px-4 py-2 bg-sky-600 text-white rounded transition hover:bg-sky-500 cursor-pointer">Giriş Yap</button>

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



                </form>
            </div>
        </div>
    </section>

@endsection
