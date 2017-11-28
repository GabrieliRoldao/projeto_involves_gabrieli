<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto Involves - @yield('title')</title>

        {{ Html::style(asset('assets/bootstrap-3.3.7/css/bootstrap.css')) }}
        @stack('css_styles')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        {{ Html::script(asset('plugins')) }}
        {{ Html::script(asset('assets/bootstrap-3.3.7/js/bootstrap.js')) }}
        @stack('js')
    </body>
</html>