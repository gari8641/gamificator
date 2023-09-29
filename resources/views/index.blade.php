@extends('layouts.app')
@section('title', 'TOP')
@section('content')

<div class="flex flex-col justify-center items-center">
<img src="images/moti-logo2.png">

    <form action="{{ route('number.show') }}" method="post" class="inline-block bg-red-200 hover:bg-red-400 py-2 px-6 rounded-full shadow-md">
        @csrf
        <input type="number" name="number">
        <button type="submit">Submit</button>
    </form>

    @if(isset($number))
        <h2>Entered Number: {{ $number }}</h2>
    @endif

</div>
@endsection
