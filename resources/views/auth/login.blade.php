<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                </label>
            </div>

            <div class="mt-4 flex items-center justify-between">
                <div>
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('¿Has olvidado tu contraseña?') }}
                    </a>
                    @endif
                </div>

                <div class="text-center">
                    <x-button class="mb-4">
                        {{ __('Iniciar sesión') }}
                    </x-button>
                    <x-button>
                        <a href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </x-button>
                </div>
            </div>

            <div class="mt-4 text-center">
                <a href="/google-auth/redirect" class="btn btn-primary btn-lg">
                    <i class="fab fa-google"></i> Registrarse con Google
                </a>
            </div>

            <div class="mt-4 text-center">
                <a href="/github-auth/redirect" class="btn btn-primary btn-lg">
                    <i class="fab fa-github"></i> Registrarse con Github
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
