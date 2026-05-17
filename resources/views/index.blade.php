@extends('layouts.app')
@section('title', 'TOP')
@section('content')

<div class="flex flex-col justify-center items-center">
    <!-- <div class="w-full flex justify-end">
        <img src="images/moti-logo2.png">
    </div> -->

    <div class="flex space-x-4 py-2">

        <button type="button" class="bg-blue-200 hover:bg-blue-400 py-2 px-6 rounded-full shadow-md mt-2" onclick="setNumber(30)">
            30
        </button>
        <button type="button" class="bg-blue-200 hover:bg-blue-400 py-2 px-6 rounded-full shadow-md mt-2" onclick="setNumber(50)">
            50
        </button>
    </div>
        
        <form action="{{ route('number.show') }}" method="post" class="inline-block bg-blue-500 hover:bg-blue-700 py-2 px-6 rounded-full shadow-md">
            @csrf
            <input id="numberinput" type="number" name="number" value="50">
            <button type="submit" class="text-white">採点</button>
        </form>



    @if(isset($number))
        <h2>獲得点数: {{ $number }}</h2>
    @endif

    @auth
    <h2>合計ポイント: {{ $score ?? 'ポイントが取得できませんでした' }}</h2>
    @endauth

</div>
<script src="{{ mix('/js/top.js') }}"></script>
@endsection
