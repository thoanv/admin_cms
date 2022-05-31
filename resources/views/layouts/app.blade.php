@php
    $info_web = \App\Models\AboutU::find(1);
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2Stay</title>
    <link rel="shortcut icon" href="{{$info_web['favicon']}}" />
    @include('layouts.css')
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @yield('content')
    @include('layouts.footer')
</div>
@include('layouts.js')
</body>
</html>
