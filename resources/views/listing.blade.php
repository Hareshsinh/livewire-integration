<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        @livewireStyles
        <style type="text/css">
            .listing {
                list-style: none;
            }
            .listing li {
                float: left;
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @livewire('user.show-user')
        </div>
         @livewireScripts
    </body>
</html>
