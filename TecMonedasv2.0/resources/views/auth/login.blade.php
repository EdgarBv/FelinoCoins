<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div style="position: relative;">
                <x-label for="email" :value="__('Correo')" />

                <x-input style="padding-left: 32px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <i class="fa fa-envelope" style=" color: #000c42; position: absolute; left: 10px; top: 35px;"></i>
            </div>

            <!-- Password -->
            <div class="mt-3" style="position: relative;">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input style="padding-left: 32px;" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <i class="fa fa-lock" style="color: #000c42; position: absolute; left: 10px; top: 35px;"></i>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-white">{{ __('Recuérdame') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-gray-400" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
                <x-button class="ml-3">
                    {{ __('Ingresar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
