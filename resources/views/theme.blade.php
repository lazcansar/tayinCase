<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Personel Tayin Talebi Uygulaması</title>
    <meta property="description" content="@yield('description')" />
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{URL::full()}}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{URL::full()}}" />
    <meta property="og:site_name" content="xxxx" />
    <meta property="og:image" content="" />
</head>
<body>
<header>
    <section class="bg-gradient-to-l from-sky-600 to-white">
        <div class="container mx-auto py-4">
            <div class="flex flex-row items-center justify-between text-white">
                <div class="logo flex flex-row gap-4 items-center">
                    <img src="https://pgm.adalet.gov.tr/Assets/front/images/logo.png" alt="Adalet Bakanlığı">
                    <a href="{{ route('home') }}"><h1 class="text-3xl text-red-600 font-semibold">Personel Genel Müdürlüğü</h1></a>
                </div>
                <div class="email"></div>
                <div class="social flex flex-row gap-2">
                    <a href="https://www.instagram.com/adaletpgm/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/AdaletPGM"><i class="bi bi-facebook"></i></a>
                    <a href="https://twitter.com/AdaletPGM"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.youtube.com/@AdaletBakanligiPersonelGM"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>
</header>

@yield('main')

<footer>
    <div class="bg-sky-800 text-center text-gray-200 border-t border-t-gray-800 py-5">
        <span class="block">Copyright &copy {{ date("Y") }} - Personel Tayin Talebi Uygulaması. Tüm hakları saklıdır.</span>
        <a href="mailto:abdullahgoksal@outlook.com" target="_blank" class="block hover:text-white text-sm transition mt-3">
            Tasarım ve Kodlaması <span class="font-medium"><i class="bi bi-code-slash text-gray-50"></i> Abdullah GÖKSAL - 204376</span> tarafından yapılmıştır.
        </a>
    </div>
</footer>
</body>
</html>
