<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('painel/css/style.css')}}">

        <style>
      body {
        font-family: "Roboto", sans-serif;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      [data-calendar] {
        font-family: "Patua One", serif;
      }
      #logo {
        text-transform: uppercase;
        font-size: 1.5rem;
        font-weight: bold;
        margin-left: 5px;
      }
      .debug {
        outline: 1px solid red;
      }
    </style>
       
    </head>
    <body>
        @yield('conteudo')
 
    </body>
</html>
