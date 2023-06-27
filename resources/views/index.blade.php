<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ゲーミフィケーター</title>
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">
<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>


<img src="images/moti-logo.png">



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
