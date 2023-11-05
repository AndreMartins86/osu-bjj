@extends('painel.appadmin')

@section('conteudo')
    <header class="bg-light py-2 shadow">
        <div class="container-fluid">
            <div class="row">
                <div style="width: 250px;">
                    <img src="{{ url('painel/img/kbrtec.webp') }}" alt="KBRTEC" height="60" width="150" class="object-fit-contain">
                </div>

                <div class="col dropdown d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Bem vindo Admin!
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill ms-2" viewBox="0 0 16 16">
                            <path fill="#6c757D"  d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg>
                    </div>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item text-end" href="#">
                                <small>Alterar Senha</small>
                            </a>
                            <a class="dropdown-item text-end" href="login.html">
                                <small>Sair</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="d-flex" style="min-height: calc(100vh - 76px - 72px);">
        <aside class="bg-custom text-light py-4" style="width: 250px;">
            <div class="menu">
                <div class="item">
                    <div class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3 border-start border-light border-4" type="button" data-bs-toggle="collapse" data-bs-target="#menu-usuario" aria-expanded="true" aria-controls="menu-usuario">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
    
                        Usuários
                    </div>

                    <div class="collapse show" id="menu-usuario">
                        <div class="bg-dark d-flex flex-column rounded mx-4 p-2 row-gap-1">
                            <a href="{{ route('adm_painel.create') }}" class="submenu-link link-light text-decoration-none rounded p-2">
                                <small class="d-flex justify-content-between align-items-center">
                                    Cadastrar
                                </small>
                            </a>
                            <a href="{{ route('adm_painel.index') }}" class="submenu-link link-light text-decoration-none rounded p-2">
                                <small class="d-flex justify-content-between align-items-center">
                                    Listagem
                                </small>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="login.html" class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3 ms-1 icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(-.125rem, 0, 0);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>

                    Sair
                </a>
            </div>
        </aside>

    {{--     @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                   @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                   @endforeach
                 </ul>
            </div>
        @endif --}}



        <main class="col h-100 text-light p-4">
            <div class="d-flex align-items-end justify-content-between mb-4">
                <h1 class="h3">Editar Usuário</h1>

                <a href="{{ route('adm_torneio.index') }}" class="btn btn-light">Voltar</a>
            </div>

            <form action="{{ route('adm_torneio.store') }}" method="POST" class="bg-custom rounded col-12 py-3 px-4" enctype="multipart/form-data" id="form">
            @csrf
<div class="mb-3 mt-3 row">
    <div class="container" id='box-crop'>
        <div id="preview-crop"></div>
        <div id="box">
            <h2 id="h2-avatar" style="color: DarkGray;">Capa</h2>            
                <input type="file" name="imagem" id="avatar-image" placeholder="">            
        </div>
    </div>
</div>
            <div class="mb-3 mt-3 row">
                <label for="titulo" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light border-dark" id="titulo" name="titulo" placeholder="Titulo" value="{{ $campeonato->titulo }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="dataCampeonato" class="col-sm-2 col-form-label">Data da realização:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light border-dark" id="dataCampeonato" name="dataCampeonato" value="{{ $campeonato->dataCampeonato }}" placeholder="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="cidade" class="col-sm-2 col-form-label">Cidade:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light border-dark" id="cidade" name="cidade" placeholder="" value="{{ $campeonato->cidade}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="local" class="col-sm-2 col-form-label">Local:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light border-dark" id="local" name="local" placeholder="" value="{{ $campeonato->local }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="estado_id" class="col-form-label">Estado:</label>
                <div class="col-2">
                   <select name="estado_id" class="form-control bg-dark text-light border-dark form-select" id="estado_id">
                    <option value="" disabled>Estado: </option>
                         @foreach ($estados as $uf)
                         @if($uf->id == $campeonato->estado_id)
                            <option value="{{ $uf->id }}" {{ 'selected' }}>{{ $uf->nome }}</option>
                            @else
                            <option value="{{ $uf->id }}">{{ $uf->nome }}</option>
                            @endif
                          @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                     <div class="form-outline">
                        <label class="form-label" for="sobre">Sobre: </label>
                        <textarea name="sobre" class="form-control" id="sobre" rows="4" placeholder="">{{ $campeonato->sobre }}</textarea>
                    </div>
                </div>

                   <div class="mb-3 row">
                     <div class="form-outline">
                        <label class="form-label" for="informacoes">Informações: </label>
                        <textarea name="informacoes" class="form-control" id="informacoes" rows="4">{{ $campeonato->informacoes }}</textarea>
                    </div>
                </div>

                   <div class="mb-3 row">
                     <div class="form-outline">
                        <label class="form-label" for="entPublico">Entrada Publica: </label>
                        <textarea name="entPublico" class="form-control" id="entPublico" rows="4" placeholder="(Opcional)">{{ $campeonato->entPubico }}</textarea>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="tipo_id" class="col-form-label">Tipo de Competição:</label>
                    <div class="col-2">
                    <select name="tipo_id" class="form-control bg-dark text-light border-dark form-select" id="tipo_id">
                        <option value="">Selecione</option>                        
                        @foreach ($tipos as $tipo)
                         @if($tipo->id == $campeonato->tipo_id)
                            <option value="{{ $tipo->id }}" {{ 'selected' }}>{{ $tipo->tipo }}</option>
                            @else
                            <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                            @endif
                          @endforeach
                   </select>
               </div>
               </div>

               <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-light" id="submit">Alterar</button>
            </div>
        </form>
            <div class="bg-custom rounded overflow-hidden">

            </div>
        </main>
    </div>

    <footer class="bg-custom text-light text-center py-4">
        <small>© Copyright 2023 - KBR TEC - Todos os Direitos Reservados</small>
    </footer>
@endsection

<script type="text/javascript">
    
      @if ($errors->any())
            let erros = '';     
            @foreach ($errors->all() as $error)
                erros += "{{ $error }}" + '\n';
            @endforeach
            alert(erros);
      @endif

      @if (session('msg'))
      alert({{ session('msg') }});
      @endif

      

</script>