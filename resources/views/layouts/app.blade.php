<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  </head>
  <body>
    <header class="flex justify-between items-center py-4 px-8 text-gray-800">
      <div>
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'げーミフィケーター') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <nav class="hidden sm:block">
        <ul class="flex space-x-4">
          <li><a href="#" class="text-gray-800">点数設定</a></li>
          <li><a href="#" class="text-gray-800">ごほうび編集</a></li>
          <!-- auth関連 -->

          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
          <!-- /auth関連 -->
        </ul>
        <div class="sm:hidden">
          <!-- ハンバーガーメニューアイコン -->
          <button type="button" class="text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="メニューを開く" id="menu-toggle">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
          <!-- ドロップダウンメニュー -->
          <div class="hidden opacity-0 transition-opacity duration-300" id="menu-dropdown">
            <ul class="mt-2 space-y-2">
              <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">点数設定</a></li>
              <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">ごほうび編集</a></li>
              <!-- auth関連 -->
              @if (Route::has('login'))
              @auth
              <li><a href="{{ url('/home') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Home</a></li>
              @else
              <li><a href="{{ route('login') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{__('Login')}}</a></li>
              @if (Route::has('register'))
              <li><a href="{{ route('register') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{__('Register')}}</a></li>
              @endif
              @endauth
              @endif
              <!-- /auth関連 -->
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
            </ul>
          </div>
        </div>
      </nav>

      <main class="py-4">
      @yield('content')
      </main>
    </div>

    <script>
// メニューのトグル
document.getElementById('menu-toggle').addEventListener('click', function() {
  var dropdown = document.getElementById('menu-dropdown');
  dropdown.classList.toggle('hidden');
  setTimeout(function() {
    dropdown.classList.toggle('opacity-0');
  }, 10);
});
    </script>
  </body>
</html>
