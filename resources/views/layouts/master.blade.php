<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>@yield('title', 'Home')</title>
    </head>
    <body class="bg-main-grey">

      @yield('header')

      <div class="content bg-white">

        @yield('content')

      </div>

      @yield('footer')
    </body>
</html>
