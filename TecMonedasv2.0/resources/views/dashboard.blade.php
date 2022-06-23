<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons_log.css') }}">
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: 'Nunito', sans-serif;
            line-height: 1.5;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .mt-4 {
            margin-top: 1rem
        }

        .max-w-6xl {
            max-width: 80rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .pt-8 {
            padding-top: 2rem
        }

        .relative {
            position: relative
        }

        @media (min-width: 200px) {
            .sm\:block {
                display: block
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:pt-0 {
                padding-top: 5rem
            }
        }

        @media screen and (max-width: 500px) {
            .desc p {
                font-size: 1rem;
            }
        }
    </style>

    <style>

        .grid {
            display: grid;
            grid-gap: 4rem;
            grid-template-columns: repeat(auto-fit, minmax(18rem, 1fr));
            align-items: start;
        }

        @media screen and (max-width: 660px) {
            .grid {
                width: 60%;
                margin: auto;
            }
        }
        .grid__item {
            background-color: rgba(255,255,255,0);
            border-radius: 0.4rem;
            overflow: hidden;
            box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: 0.2s;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .grid__item:hover {
            transform: translateY(-0.5%);
            box-shadow: 0 1rem 4rem rgb(182 151 42 / 40%)
        }

        .card__img {
            display: block;
            width: 100%;
        }

        .card__content {
            padding: 1rem 1rem;
        }

        .card__header {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 1rem;
        }

        .card__text {
            letter-spacing: 0.1rem;
            line-height: 1.5;
            color: #fff;
            margin-bottom: 1.2rem;
        }

        .card__btn {
            display: block;
            width: 50%;
            padding: 0.8rem;
            font-size: 1rem;
            text-align: center;
            margin: auto;
            color: #fff;
            border-radius: 0.4rem;
            transition: 0.2s;
            cursor: pointer;
        }

        .card__btn span {
            margin-left: 1rem;
            transition: 0.2s;
        }

        .card__btn:hover span,
        .card__btn:active span {
            margin-left: 1.5rem;
        }
    </style>
</head>

<body class="antialiased">
    <x-app-layout>
        <x-slot name="header">
            @if(@Auth::user()->hasRole('visitator'))
            <h2 style="font-size: 1.7rem; text-align: center; padding: 10px; color: #fff;">
                {{ __('PANEL DE ALUMNO') }}
            </h2>
            @endif
            @if(@Auth::user()->hasRole('administrator'))
            <h2 style="font-size: 1.7rem; text-align: center; padding: 10px; color: #fff;">
                {{ __('PANEL DE ADMINISTRACIÓN') }}
            </h2>
            @endif

        </x-slot>
        <div>
            <div class="relative flex items-top justify-center min-h-fit sm:items-center py-4 sm:pt-0"
                style="color: #000; background-color: rgb(0 12 66); padding-top: 30px;">

                <div class="mx-auto sm:px-6 lg:px-8">
                    <div style="text-align: center;">
                        @if(@Auth::user()->hasRole('visitator'))
                        <div class="grid">
                            <div class="grid__item">
                                <div class="card"><img class="card__img"
                                        src="images/cards/premios.png"
                                        alt="Snowy Mountains">
                                    <div class="card__content">
                                        <h1 class="card__header">Premios</h1>
                                        <p class="card__text">Existen premios 
                                            <strong>físicos y únicos</strong> que desearías obtener durante tu formación académica dentro de la universidad. No te los pierdas, participa y gana.</p>
                                        <button class="card__btn btn log">Explorar <span>&rarr;</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__item">
                                <div class="card">
                                    <img class="card__img"
                                        src="images/cards/eventos.jpg"
                                        alt="Desert">
                                    <div class="card__content">
                                        <h1 class="card__header">Eventos</h1>
                                        <p class="card__text">Te mostramos todos los eventos que organiza el <strong>Tecnológico de Motul</strong>; míralos que de seguro querrás participar en alguno de éstos.</p>
                                        <button class="card__btn btn log">Explorar <span>&rarr;</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__item">
                                <div class="card"><img class="card__img"
                                        src="images/cards/top.jpg"
                                        alt="Canyons">
                                    <div class="card__content">
                                        <h1 class="card__header">Tops</h1>
                                        <p class="card__text">Puedes echar un ojo a los estudiantes que son <strong>más ricos</strong> en toda la universidad, por si quieres pedir prestado, claro está.</p>
                                        <button class="card__btn btn log">Explorar <span>&rarr;</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="images/saludo.gif" alt="saludo" width="35%" style="margin: 50px auto;"> -->
                        @endif
                        @if(@Auth::user()->hasRole('administrator'))
                        <img src="images/admin.gif" alt="admin" width="100%" style="margin: 50px auto;">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <nav id="navbar">
        <ul>
            <li class="w-full h-full py-4 px-2 border-t border-b border-light-border">
                <x-nav-link class="text-white" href="/">
                    {{ __('Inicio') }}
                </x-nav-link>
            </li>
            <li class="w-full h-full py-4 px-2 border-b border-light-border">
                <x-nav-link class="text-white" style="border-color: rgb(234, 179, 8);" :href="route('dashboard')"
                    :active="request()->routeIs('dashboard')">
                    {{ __('Panel') }}
                </x-nav-link>
            </li>
            <li class="w-full h-full py-4 px-2 border-b border-light-border">
                @if(@Auth::user()->hasRole('visitator'))
                <x-nav-link class="text-white" :href="route('swaps')" :active="request()->routeIs('swaps')">
                    {{ __('Canjes') }}
                </x-nav-link>
                @endif
                @if(@Auth::user()->hasRole('administrator'))
                <x-nav-link class="text-white" :href="route('admin.view_tickets')"
                    :active="request()->routeIs('admin.view_tickets')">
                    {{ __('Tickets') }}
                </x-nav-link>
                @endif
            </li>
            <li class="w-full h-full py-4 px-2 border-b border-light-border">
                @if(@Auth::user()->hasRole('visitator'))
                <x-nav-link class="text-white" :href="route('my-tickets')" :active="request()->routeIs('my-tickets')">
                    {{ __('Mis tickets') }}
                </x-nav-link>
                @endif
            </li>
            <li class="w-full h-full py-4 px-2 border-b border-light-border">
                @if(@Auth::user()->hasRole('visitator'))
                <x-nav-link class="text-white" :href="route('awards')" :active="request()->routeIs('awards')">
                    {{ __('Premios') }}
                </x-nav-link>
                @endif
                @if(@Auth::user()->hasRole('administrator'))
                <x-nav-link class="text-white" :href="route('admin.view_users')"
                    :active="request()->routeIs('admin.view_users')">
                    {{ __('Usuarios') }}
                </x-nav-link>
                @endif
            </li>
        </ul>
        <div id="name" style="color: white; text-align: center; margin-top: 10%;">
            <img src="https://i.ibb.co/m9XGm8k/logo-tecmoneda.png" width="150px" style="margin: auto;">
        </div>
    </nav>
    <div class="dark-blue" id="blue"></div>
</body>

</html>