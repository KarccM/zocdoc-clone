<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Zocdoc</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/sass/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="/sass/pages/card.css">
        <link href="/sass/pages/nav.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,0" />
        <link rel="stylesheet" href="/sass/pages/home.css">
        <link rel="stylesheet" href="/sass/pages/big-card.css">
        @livewireStyles
    
    </head>
    <body>
        @livewire('navbar')
        {{$content}}
        @livewire('footer')
        @livewireScripts
    </body>
</html>
