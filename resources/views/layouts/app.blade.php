<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Agenda') }}</title>
    </head>
    <body>
        <div id="app">
            <main class="py-4">
                <div class="container">
                    @yield('content')
                </div>   
            </main>
        </div>
    </body>
</html>
