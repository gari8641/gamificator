@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="font-bold text-xl mb-4">{{ __('Dashboard') }}</div>

                <div class="text-gray-700">
                    @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p>
                        <a href="{{ route('password.request') }}">パスワード変更</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
