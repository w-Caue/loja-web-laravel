@extends('layouts.ecommerce')

@section('content')
    <div class="flex justify-center items-center flex-col sm:flex-row mt-5 w-full">

        <div class="flex w-3/4 mt-5">
            <div class="flex flex-col justify-center items-center w-full px-6 py-4 bg-white overflow-hidden sm:rounded-l">
                <h1 class="font-semibold text-4xl">
                    Bem Vindo de Volta
                </h1>
                <p class="font-semibold text-sm text-gray-500">Para se manter conectado conosco, preencha com suas informações</p>

                <x-links.link-outline href="{{ route('login') }}" class="mt-6">
                    {{ __('Fazer Login') }}
                </x-links.link-outline>

                <x-validation-errors class="mb-4" />
            </div>

            <div class="w-full px-6 py-4 bg-white overflow-hidden sm:rounded-r">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mt-4">
                        <x-inputs.input-label class="block" value="{{ __('Nome') }}" name="name" required autofocus
                            autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-inputs.input-label class="block" value="{{ __('Email') }}" type="email" name="email"
                            required autocomplete="email" />
                    </div>

                    <div class="mt-4">
                        <x-inputs.input-label class="block" value="{{ __('Telefone') }}" type="tel" name="phone"
                            required autocomplete="phone" />
                    </div>

                    <div class="flex gap-7 mt-4">
                        <div class="w-full">
                            <x-inputs.input-label for="password" id="password" class="block " value="{{ __('Senha') }}"
                                type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <div class="w-full">
                            <x-inputs.input-label class="block" value="{{ __('Confirmar Senha') }}" type="password"
                                name="password_confirmation" required autocomplete="password_confirmation" />
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

                    <div class="flex items-center justify-center mt-4">
                        {{-- <x-button class="ms-4">
                            {{ __('Cadastrar-se') }}
                        </x-button> --}}
                        <x-buttons.button class="mt-1">
                            {{ __('Cadastrar-se') }}
                        </x-buttons.button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    {{-- <x-footer class=""></x-footer> --}}
@endsection
