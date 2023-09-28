<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div>
        @include('layouts.nav')
        <main class="pt-5">
            <div class="mt-5 ms-5 me-5">
                @include('component\error_alert')
            </div>
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
