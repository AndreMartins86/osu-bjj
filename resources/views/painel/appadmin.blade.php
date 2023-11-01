<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBRTEC ADMIN</title>    
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('painel/css/style.css') }}">
    <script>
    tailwind.config = {
      prefix: "tw-",
      corePlugins: {
         preflight: false,
      }
    }
  </script>



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
    <body class="bg-dark h-100">
        @yield('conteudo')




           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    </body>
</html>
