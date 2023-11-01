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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>

  <script type="text/javascript">

    @if ($errors->any())
      let erros = '';     
        @foreach ($errors->all() as $error)
          erros += "{{ $error }}" + "\n";
        @endforeach
        alert(erros);
    @endif

    @if (session('msg'))      
      alert("{{ session('msg') }}");
    @endif

    let t = document.getElementById('table');    

    if (t !== null){

      function getButton(id){

        let url = "{{ route('adm_painel.show', ":id") }}";
        url = url.replace(':id', id);

        $.ajax({
          url: url,
          type: 'GET',
          dataType: 'json',
          // data: {Userid: id},
          complete: function(xhr, textStatus) {
            //called when complete
          },
          success: function(data, textStatus, xhr) {
            let dados = data;
            $("#nome").text(dados.nome);
            $("#cargo").text(dados.cargo);
            $("#email").text(dados.email);

            const modalShow = new bootstrap.Modal('#modalShow');

            modalShow.show();

          }          
        });
      }
    }

  </script>

</body>
</html>
