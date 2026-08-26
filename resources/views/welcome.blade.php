<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div style="display:flex;align-items:center;justify-content:center;min-height:100vh;">
        <a href="{{ url('/') }}" class="btn btn-primary">Idi na početnu</a>
    </div>
</body>
</html>
