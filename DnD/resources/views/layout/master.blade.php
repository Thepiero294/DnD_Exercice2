<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('layout.title') }}</title>
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
        <div class="content">
            <div class="container">
            @include('layout.header')
            </div>

            @yield('content')

        </div>
    </body>
</html>
