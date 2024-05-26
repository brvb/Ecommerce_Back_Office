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
    <body style="">
        <!-- <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div> -->
        @include('layouts.navigation')
        @include('layouts.sidebar')
        <!-- Page Heading -->
        <!-- @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif -->

        <!-- Page Content -->
        <div class="pcoded-main-container">
            <div class="pcoded-content">
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
        @livewireScripts
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/pcoded.min.js"></script>
        <!-- Apex Chart -->
        <script src="assets/js/plugins/apexcharts.min.js"></script>
        <!-- custom-chart js -->
        <script src="assets/js/pages/dashboard-main.js"></script>
    </body>
</html>
