<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('assets/icon/fav-icon.png') }}">
    <meta name="theme-color" content="#6777ef" />
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <title>Pendekar Banyumas</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
