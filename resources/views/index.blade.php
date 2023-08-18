<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ゲーミフィケーター</title>
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">
<script src="https://cdn.tailwindcss.com"></script>


</head>
<body>


<header class="flex justify-between items-center py-4 px-8 text-gray-800">
  <div>
    <h1 class="text-xl font-bold">ゲーミフィケーター</h1>
    <p>Boost Your Motivation</p>
  </div>
  <nav class="hidden sm:block">
    <ul class="flex space-x-4">
      <li><a href="#" class="text-gray-800">点数設定</a></li>
      <li><a href="#" class="text-gray-800">ごほうび編集</a></li>
      <!-- auth関連 -->
      @if (Route::has('login'))
        @auth
          <li><a href="{{ url('/home') }}" class="text-gray-800">Home</a></li>
        @else
          <li><a href="{{ route('login') }}" class="text-gray-800">{{__('Login')}}</a></li>
          @if (Route::has('register'))
            <li><a href="{{ route('register') }}" class="text-gray-800">{{__('Register')}}</a></li>
          @endif
        @endauth
      @endif
      <!-- /auth関連 -->
    </ul>
  </nav>
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
</header>


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



<img src="images/moti-logo2.png">

    <form action="{{ route('number.show') }}" method="post" class="inline-block bg-red-200 hover:bg-red-400 py-2 px-6 rounded-full shadow-md">
        @csrf
        <input type="number" name="number">
        <button type="submit">Submit</button>
    </form>

    @if(isset($number))
        <h2>Entered Number: {{ $number }}</h2>
    @endif

</body>
</html>
