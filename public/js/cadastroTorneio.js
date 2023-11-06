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

    console.log(btnImagem);


                    

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
                    let entPublico = document.getElementById('entPublico').value;
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
                         'entradaPublico': entPublico,
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