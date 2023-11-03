<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">

    <title>@yield('title', 'Ademass | Taller BootCamp Css 3')</title>

    @yield('styles')
</head>

<body>

    @include('layouts.partials.header')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.partials.footer')

    <script src="{{ asset('assets/js/fontawesome-all.min.js') }}"></script>

    @yield('scripts')

</body>

</html>
