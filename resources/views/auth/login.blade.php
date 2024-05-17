@extends('layouts.ecommerce')

@section('content')
    <div class="flex justify-around flex-col sm:flex-row mt-5 w-full">

        <div class="flex w-3/4 mt-5">
            <div class="flex justify-center items-center w-full px-6 py-4 bg-white overflow-hidden rounded-l">
                <h1 class="font-semibold text-4xl">Bem Vindo</h1>

                <x-validation-errors class="mb-4" />
            </div>

            <div class="w-full px-6 py-4 bg-white overflow-hidden rounded-r">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mt-4">
                        <x-inputs.input-label class="block" value="{{ __('Email') }}" type="email" name="email"
                            required autocomplete="email" />
                    </div>

                    <div class="mt-4">
                        <x-inputs.input-label for="password" id="password" class="block" value="{{ __('Senha') }}" type="password" name="password"
                            required autocomplete="new-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Lembre-me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua senha?') }}
                            </a>
                        @endif

                        <x-button class="ms-4">
                            {{ __('Entrar') }}
                        </x-button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    {{-- <x-footer class=""></x-footer> --}}
@endsection
