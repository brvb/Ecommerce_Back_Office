<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>



        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        @livewireStyles
    </head>
    <body class="auth-wrapper">
        <div class="auth-content text-center">
            <div class="row align-items-center ">
                <div class="card borderless">
                    <div class="col-md-12">
                        <div class="card-body">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
