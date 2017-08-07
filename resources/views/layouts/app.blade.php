<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title>


    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            {{-- Esto va a dejar el contenido la estructura preparada
            lo que cambia sera el content. Asi no tenemos que repetirnos--}}
            @yield('content')
        </div>
    </body>
</html>
