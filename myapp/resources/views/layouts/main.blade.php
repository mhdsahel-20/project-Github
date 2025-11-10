<!DOCTYPE html>
<html lang="id">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Saya')</title>

    {{-- Hubungkan file CSS --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
        }
        main {
            min-height: 70vh;
            padding: 40px;
            text-align: center;
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Konten halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
