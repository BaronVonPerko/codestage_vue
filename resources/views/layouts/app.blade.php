<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Code Stage') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="shadow-sm p-4">
        <div class="container mx-auto flex justify-between align-center">

            <h3>{{config('app.name', 'Code Stage')}}</h3>
            <div>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{ route('logout') }}">Logout</a>
                @endif

                @if(\Illuminate\Support\Facades\Auth::guest())
                    <a href="{{ route('login') }}">Login</a>
                @endif
            </div>
        </div>

    </nav>

    <main class="py-4 container mx-auto">
        @yield('content')
    </main>
</div>
</body>
</html>
