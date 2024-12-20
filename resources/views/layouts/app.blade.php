<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> -->

    <!-- Your Custom Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">
<!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>

<!-- PC用メニュー -->
<nav class="hidden sm:block p-4">
<header class="flex justify-between items-center py-4 px-8 text-gray-800">
    <div>
    <a href="/"><h1 class="text-xl font-bold text-black">ゲーミフィケーター</h1>
    <p class="text-black">Boost Your Motivation</p></a>
  </div>
    <ul class="flex space-x-4">
        <!-- auth関連 -->
        @if (Route::has('login'))
            @auth
            <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">点数設定</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">ごほうび編集</a></li>
            <li><a href="{{ url('/home') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{ Auth::user()->name }}</a></li>



            <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                ログアウト
            </a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>



            @else
            <li><a href="{{ route('login') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{__('Login')}}</a></li>
            @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{__('Register')}}</a></li>
            @endif
            @endauth
        @endif
        <!-- /auth関連 -->
    </ul>
</nav>
</header>

<!-- スマートフォン用メニュー -->
<header class="flex flex-col justify-between items-center py-4 px-8 text-gray-800">
<nav class="sm:hidden p-4">
    <div>
<a href="/">
    <h1 class="text-xl font-bold text-black">ゲーミフィケーター</h1>
    <p class="text-black">Boost Your Motivation</p>
</a>
  </div>
    <ul class="flex flex-col space-y-4 py-4">
        <!-- auth関連 -->
        @if (Route::has('login'))
            @auth
            <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">点数設定</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">ごほうび編集</a></li>
            <li><a href="{{ url('/home') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{ Auth::user()->name }}</a></li>


            <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-gray-800 hver:bg-gray-200">
                ログアウト
            </a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>



            @else
            <li><a href="{{ route('login') }}" class="block px-4 py-2 text-gray-800 hver:bg-gray-200">{{__('Login')}}</a></li>
            @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="block px-4 py-2 text-gray-800 hver:bg-gray-200">{{__('Register')}}</a></li>
            @endif
            @endauth
        @endif
        <!-- /auth関連 -->
    </ul>
</nav>
</header>

        <main class="p-8">
            @yield('content')
        </main>
    </div>




</body>
</html>

