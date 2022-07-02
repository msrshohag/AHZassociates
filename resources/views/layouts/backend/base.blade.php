<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/.min.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>

    @stack('css')
    @livewireStyles
</head>

<body>

    <!--header area-->
    {{-- <livewire:header /> --}}

    {{ $slot }}

    <!--footer area-->
    {{-- @livewire('footer') --}}

    <script src="{{ asset('assets/js/.js') }}"></script>

    @stack('js')
    @livewireScripts
</body>

</html>
