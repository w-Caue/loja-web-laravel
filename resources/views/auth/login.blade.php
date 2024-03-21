@extends('layouts.ecommerce')

@section('content')
    <div class="flex justify-center ">
        <div class="grid grid-rows-2 gap-1 sm:grid-cols-2 m-3 sm:h-96 w-full">

            <div class="sm:max-w-lg">
                <h1 class="text-2xl font-semibold tracking-widest">
                    Login
                </h1>
                <div class="w-full mt-1 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                required autofocus autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Senha') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />
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

            <div class="sm:max-w-lg">
                <h1 class="text-2xl font-semibold tracking-widest">
                    Cadastra-se
                </h1>
                <div class="w-full mt-1 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <x-label for="name" value="{{ __('Nome') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                        </div>

                        <div class="flex gap-7 mt-4">
                            <div>
                                <x-label for="password" value="{{ __('Senha') }}" />
                                <x-input id="password" class="block mt-1 w-44" type="password" name="password" required
                                    autocomplete="new-password" />
                            </div>

                            <div>
                                <x-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                                <x-input id="password_confirmation" class="block mt-1 w-44" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />

                                        <div class="ms-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' =>
                                                    '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Terms of Service') .
                                                    '</a>',
                                                'privacy_policy' =>
                                                    '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Privacy Policy') .
                                                    '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ms-4">
                                {{ __('Cadastrar-se') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
