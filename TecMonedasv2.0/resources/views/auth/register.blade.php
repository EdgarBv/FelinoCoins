<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div style="position: relative;">
                <x-label for="name" :value="__('Nombre')" />

                <x-input style="padding-left: 32px;" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <i class="fa fa-user" style=" color: #000c42; position: absolute; left: 10px; top: 36px;"></i>
            </div>

            <div class="mt-3 mb-3 hidden">
                <x-label for="active_account" :value="__('Cuenta')" />

                <x-input id="active_account" class="block mt-1 w-full" type="text" name="active_account" value="false" required autofocus />
            </div>

            <!-- Career -->
            <div class="mt-3" style="position: relative;">
                <x-label for="career" :value="__('Carrera')" />

                <x-select style="padding-left: 32px !important; padding: 8px; width:" id="career" class="block mt-1 w-full" name="career" required autofocus />
                <i class="fa fa-cog" style=" color: #000c42; position: absolute; left: 10px; top: 37px;"></i>
            </div>

            <!-- Date of birth -->
            <div class="mt-3 form-floating mb-3" style="position: relative;">
                <x-label for="date_of_birth" :value="__('Fecha de nacimiento')" />

                <x-input datepicker datepicker-format="yyyy-mm-dd" style="padding-left: 32px;" id="date_of_birth" class="block mt-1 w-full" type="text" name="date_of_birth" :value="old('date_of_birth')" required autofocus />

                <i class="fa fa-calendar" style=" color: #000c42; position: absolute; left: 10px; top: 36px;"></i>
            </div>

            <!-- Email Address -->
            <div class="mt-3 form-floating mb-3" style="position: relative;">
                <x-label for="email" :value="__('Correo')" />

                <x-input style="padding-left: 32px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <i class="fa fa-envelope" style=" color: #000c42; position: absolute; left: 10px; top: 37px;"></i>
            </div>

            <!-- Password -->
            <div class="mt-4" style="position: relative;">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input style="padding-left: 32px;" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                <i class="fa fa-key" style=" color: #000c42; position: absolute; left: 10px; top: 35px;"></i>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4" style="position: relative;">
                <x-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                <x-input style="padding-left: 32px;" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                <i class="fa fa-key" style=" color: #000c42; position: absolute; left: 10px; top: 35px;"></i>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-gray-400" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>