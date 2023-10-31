@extends('app')

@section('title', 'Campeonato de Jiu Jitsu')

@section('conteudo')


    <header>
      <nav class="bg-white border-gray-200">
        <div
          class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
        >
          <a href="/" class="flex items-center">
            <img src="{{ url('img/logo.svg') }}" alt="Logo" />
            <p id="logo">OSU BJJ</p>
          </a>
          <button
            data-collapse-toggle="navbar-default"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default"
            aria-expanded="false"
          >
            <span class="sr-only">Abrir menu principal</span>
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
              />
            </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
              class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:items-center md:space-x-8 md:mt-0 md:border-0 md:bg-white"
            >
              <li>
                <a
                  href="{{ route('home') }}"
                  class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                  >Início</a
                >
              </li>
              <li>
                <a
                  href="{{ route('torneios') }}"
                  class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                  aria-current="page"
                  >Torneios</a
                >
              </li>
              <li>
                <a
                  href="./area_atleta/area_restrita.html"
                  class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center"
                >
                  Área do competidor
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="bg-blue-700">
      <div
        class="relative grid place-items-center max-w-7xl w-full mx-2 lg:mx-auto min-h-[200px]"
      >
        <div>
          <nav class="flex md:absolute left-0" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
              <li class="inline-flex items-center">
                <a
                  href="{{ route('home' )}}"
                  class="inline-flex items-center text-sm font-medium text-white hover:text-blue-200"
                >
                  <svg
                    class="w-3 h-3 mr-2.5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                    />
                  </svg>
                  Início
                </a>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg
                    class="w-3 h-3 text-gray-100 mx-1"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 6 10"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m1 9 4-4-4-4"
                    />
                  </svg>
                  <span class="ml-1 text-sm font-medium text-gray-100 md:ml-2"
                    >Torneios</span
                  >
                </div>
              </li>
            </ol>
          </nav>
          <h1 class="uppercase text-center text-white text-4xl">Torneios</h1>
        </div>
      </div>
    </div>
    <form action="{{ route('buscar') }}" method="POST" 
      class="rounded-lg shadow max-w-7xl m-4 md:mx-auto md:mt-4 outline outline-1 outline-gray-300 p-4 flex flex-col lg:flex-row gap-2">
    @csrf

      <div class="flex-1">
        <label
          for="Título do evento"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Título do evento</label>          
        <input
          name="titulo"
          type="text"
          id="Título do evento"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Nome do evento"
          required
        />
      </div>
      <div>
        <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900"
          >Tipo</label
        >
        <select
          name="tipo"
          id="tipo"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"          
        >
          <option selected value="">Escolha um tipo</option>
          @foreach ($tipos as $tipo)
          <option value="{{ $tipo->id }}">{{ $tipo->tipo}}</option>
          @endforeach
        </select>
      </div>
      <div>
        <label for="estado" class="block mb-2 text-sm font-medium text-gray-900"
          >Estado</label
        >
        <select
          name="estado"
          id="estado"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          required
          >
          <option selected value="">Escolha um estado</option>
          
         @foreach ($estados as $uf)
          <option value="{{ $uf->id }}">{{ $uf->nome }}</option>
          @endforeach
          {{-- 
          <option value="SP">São Paulo</option>
          <option value="RJ">Rio de Janeiro</option> --}}
        </select>
      </div>
      <div>
        <label for="cidade" class="block mb-2 text-sm font-medium text-gray-900"
          >Cidade</label
        >
        <input
          name="cidade"
          type="text"
          id="cidade"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Cidade do torneio"
          required
        />
      </div>
      <div class="flex items-end">
        <button
          type="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5"
        >
          Buscar
        </button>
      </div>
    </form>
    <main>

      @if(session('message'))
        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>{{ session('message') }}  <a href="{{ route('torneios') }}" title="Nova Busca">Clique aqui para nova busca</a></p>  
</div>
      @else


      <div class="grid lg:grid-cols-4 gap-3 max-w-7xl mx-2 lg:mx-auto">


        @foreach($campeonatos as $camp)

        <article
          class="relative w-full rounded-xl overflow-hidden shadow-xl p-2 outline outline-1 outline-gray-400 text-gray-900 hover:-translate-y-2 transition-transform duration-300"
        >
          <img
            src="{{ $camp->imagem }}"
            alt="Imagem do torneio"
            class="rounded-md w-full h-[200px] object-cover"
          />
          <div class="p-3 relative">
            <div
              class="absolute -top-14 bg-white px-4 py-2 rounded-md shadow-md shadow-gray-500 text-center"
            >
              @php
              setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
              date_default_timezone_set('America/Sao_Paulo');
              @endphp

              <p class="text-2xl font-bold" data-calendar>{{  date('d',strtotime($camp->dataCampeonato))  }}</p>
              <p>{{ strftime("%b", strtotime($camp->dataCampeonato)) }}</p>
            </div>
            @if($camp->fase_id == 1)
              <p
               class="absolute -top-3 left-24 bg-green-600 px-3 text-white rounded-xl">        
            @elseif($camp->fase_id == 2)
              <p
                class="absolute -top-3 left-24 bg-yellow-600 px-3 text-white rounded-xl"
              >
            @else
             <p
                class="absolute -top-3 left-24 bg-blue-700 px-3 text-white rounded-xl"
              >
            @endif
                {{ $camp->getFase() }}
            </p>
            <h3 class="mt-4 uppercase text-xl min-h-[60px]">
              {{ $camp->titulo }}
            </h3>
            <p class="text-gray-400 flex gap-2 my-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 6h.008v.008H6V6z"
                />
              </svg>
              {{ $camp->getTipo() }}
            </p>
            <p class="text-gray-400 flex gap-2 my-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                />
              </svg>
              {{ $camp->cidade .'-'.$camp->getEstadoSigla()  }}
            </p>
          </div>
          <a
            href="{{ route('integra', ['campeonato' => $camp, 'slug' => $camp->friendUrl()]) }}"
            title="Saiba mais sobre {{ $camp->titulo }}"
            class="absolute inset-0"
          ></a>
        </article>

        @endforeach
       
       <br><br>
       <center>{{ $campeonatos->links() }}</center>
       
      </div>
      @endif


      
{{--       <nav aria-label="Paginação torneios">
        <ul class="mt-12 -space-x-px text-lg flex justify-center">
          <li>
            <a
              href="#"
              class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700"
              >Anterior</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
              >1</a
            >
          </li>
          <li>
            <a
              href="#"
              aria-current="page"
              class="flex items-center justify-center px-4 h-10 text-blue-600 font-bold border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700"
              >2</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
              >3</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700"
              >Próxima</a
            >
          </li>
        </ul>
      </nav> --}}
    </main>
    <footer
      class="rounded-lg shadow max-w-7xl m-4 md:mx-auto md:mt-4 outline outline-1 outline-gray-300"
    >
      <div
        class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between"
      >
        <span class="text-sm text-gray-500 sm:text-center"
          >© 2023 <a href="/" class="hover:underline">OSU BJJ</a>. Todos os
          direitos reservados.
        </span>
        <ul
          class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0"
        >
          <li>
            <a href="./index.html" class="mr-4 hover:underline md:mr-6"
              >Início</a
            >
          </li>
          <li>
            <a href="./torneios.html" class="mr-4 hover:underline md:mr-6"
              >Torneios</a
            >
          </li>
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6"
              >Área do competidor</a
            >
          </li>
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6"
              >Política de privacidade</a
            >
          </li>
        </ul>
      </div>
    </footer>
@endsection