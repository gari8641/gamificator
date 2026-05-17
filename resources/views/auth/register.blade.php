@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-lg">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">{{ __('Register') }}</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4 md:flex md:items-center">
                        <label for="name" class="md:w-1/3 block text-gray-700 text-sm font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Name') }}</label>
                        <div class="md:w-2/3">
                            <input id="name" type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 md:flex md:items-center">
                        <label for="email" class="md:w-1/3 block text-gray-700 text-sm font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('E-Mail Address') }}</label>
                        <div class="md:w-2/3">
                            <input id="email" type="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 md:flex md:items-center">
                        <label for="password" class="md:w-1/3 block text-gray-700 text-sm font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Password') }}</label>
                        <div class="md:w-2/3">
                            <input id="password" type="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 md:flex md:items-center">
                        <label for="password-confirm" class="md:w-1/3 block text-gray-700 text-sm font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Confirm Password') }}</label>
                        <div class="md:w-2/3">
                            <input id="password-confirm" type="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="mb-4 md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
