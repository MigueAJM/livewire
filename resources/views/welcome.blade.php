<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

    @livewireStyles
    <body>

        @php
            $count = 1; 
            $data = [
                'title' => 'Laravel Livewire',
                'description' => 'Curso de livewire'
            ];   
        @endphp
        <livewire:counter :count="$count" :data="$data"/>
        <br/>
        <livewire:paises />
        @livewireScripts
    </body>
</html>
