<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KBRTEC ADMIN</title>
  <meta name="_token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">    
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.css" integrity="sha512-bs9fAcCAeaDfA4A+NiShWR886eClUcBtqhipoY5DM60Y1V3BbVQlabthUBal5bq8Z8nnxxiyb1wfGX2n76N1Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.js" integrity="sha512-Zt7blzhYHCLHjU0c+e4ldn5kGAbwLKTSOTERgqSNyTB50wWSI21z0q6bn/dEIuqf6HiFzKJ6cfj2osRhklb4Og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

      ////////////////////////////////////////////////////////////////////////

      const extensions = {
      'img/png':'png',
      'img/jpeg':'jpeg',
      'img/jpg':'jpg',

    };

    function criarBotao (textContent) {
      const button = document.createElement('button');
      button.textContent = textContent;
      return button;
      
    }

    function crop (imagem) {
      return new Cropper(imagem, {
         dragMode:'move',
        preview:'#preview-crop'

      })
    };


    const btnImagem = document.querySelector('#avatar-image');
    const h2Avatar = document.querySelector('#h2-avatar');
    const preview = document.querySelector('#preview-imagem');
    const previewImagem = document.createElement('img');
    const enviar = document.getElementById('submit');
    const form = document.getElementById('form');


                    

    btnImagem.addEventListener('change', e => {

      const preview = document.querySelector('#preview-imagem')   

      if (preview) {
        preview.remove();
      }   

      const reader = new FileReader()       

      reader.onload = function (e) {
                
        previewImagem.id = 'preview-imagem';
        previewImagem.src = e.target.result;

        h2Avatar.insertAdjacentElement('afterend', previewImagem);
      }

      reader.readAsDataURL(btnImagem.files[0]);

      setTimeout(() => {
        let cropper = crop(previewImagem);
        let previewCrop =  document.querySelector('#preview-crop');
        previewCrop.style = 'display:block';

        const removerBotaoCrop = criarBotao('Remover recorte');
        //const uploadBotao = criarBotao('Enviar');

        h2Avatar.insertAdjacentElement('afterend', removerBotaoCrop);
        //h2Avatar.insertAdjacentElement('afterend', uploadBotao);

        removerBotaoCrop.addEventListener('click', e => {
          cropper.destroy();
          removerBotaoCrop.remove();
          //uploadBotao.remove();
          previewImagem.remove();
          previewCrop.style = 'display:none';
        });

        enviar.addEventListener('click', e => {
          e.preventDefault();
          console.log(cropper);

          if (cropper.cropped) {
            //
            canvas = cropper.getCroppedCanvas();

            canvas.toBlob(function(blob) {
                //url = URL.createObjectURL(blob);              
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result; 
                    //console.log(base64data);

                    let titulo = document.getElementById('titulo').value;
                    let dataEvento = document.getElementById('dataCampeonato').value;
                    let cidade = document.getElementById('cidade').value;
                    let estado_id = document.getElementById('estado_id').value;
                    let sobre = document.getElementById('sobre').value;
                    let entPublica = document.getElementById('entPublica').value;
                    let tipo_id = document.getElementById('tipo_id').value;
                    let local = document.getElementById('local').value;
                    let info = document.getElementById('informacoes').value;
                    

                    console.log(titulo);
                    

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "{{ route('adm_torneio.store') }}",
                        data: {'_token': $('meta[name="_token"]').attr('content'), 'imagem': base64data,
                        'titulo': titulo,
                        'dataCampeonato': dataEvento,
                         'cidade': cidade,
                         'estado_id': estado_id,                         
                         'sobre': sobre,
                         'local': local,
                         'informacoes': info,
                         'entradaPublico': entPublica,
                         'tipo_id': tipo_id
                      },
                        success: function(data){
                            console.log(data);                            
                            alert("Campeonato Cadastrado");
                        }                   
                        
                    });
                }
            });

          }/////if croper.cropped


        });
      },300)  

    });
  </script>

</body>
</html>