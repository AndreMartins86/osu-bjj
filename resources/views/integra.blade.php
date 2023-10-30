@extends('app')

@section('title', 'Campeonato de Jiu Jitsu')

@section('conteudo')
  <header>
      <nav class="bg-white border-gray-200">
        <div
          class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
        >
          <a href="{{ route('home') }}" class="flex items-center">
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
                  href="{{ route('atleta') }}"
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

    <main
      class="max-w-7xl mx-2 lg:mx-auto text-gray-900"
      x-data="{active:'sobre_evento'}"
    >
      <img
        src="{{ url($campeonato->imagem )}}"
        alt="Imagem do torneio"
        class="rounded-md h-[500px] w-full object-cover"
      />
      @php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
      @endphp
      <time datetime="{{ $campeonato->dataCampeonato }}" class="block mt-4 text-gray-500"
        >{{ strftime('%A, %d de %B', strtotime($campeonato->dataCampeonato))  }}</time
      >
      <h1
        class="my-1 font-bold text-5xl text-blue-800 flex flex-col lg:flex-row lg:items-center gap-2"
      >
        {{ $campeonato->titulo }}
        <span class="text-gray-500 font-normal text-3xl">#{{ $campeonato->id }}</span>
      </h1>
      <div class="flex gap-2">
        <p class="text-gray-500 flex gap-2 my-2">
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
          {{ $campeonato->cidade .'-'.$campeonato->getEstadoSigla()  }}
        </p>
        <p class="text-gray-500 flex gap-2 my-2">
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
          {{ $campeonato->getTipo() }}
        </p>
      </div>
      <ul
        class="flex flex-wrap font-medium text-center text-gray-500 border-b border-gray-200"
      >
        <li>
          <h2
            class="inline-block p-4 rounded-t-lg cursor-pointer"
            id="sobre_evento"
            x-on:click="active='sobre_evento'"
            x-bind:class="active=='sobre_evento' ? 'bg-gray-100 rounded-t-lg' : 'hover:text-gray-600 hover:bg-gray-50'"
          >
            <span class="text-blue-700" x-show="active=='sobre_evento'">#</span>
            Sobre o evento
          </h2>
        </li>
        <li>
          <h2
            class="inline-block p-4 rounded-t-lg cursor-pointer"
            id="ginasio"
            x-on:click="active='ginasio'"
            x-bind:class="active=='ginasio' ? 'bg-gray-100 rounded-t-lg' : 'hover:text-gray-600 hover:bg-gray-50'"
          >
            <span class="text-blue-700" x-show="active=='ginasio'">#</span>
            Ginásio
          </h2>
        </li>
        <li>
          <h2
            class="inline-block p-4 rounded-t-lg cursor-pointer"
            id="infos_gerais"
            x-on:click="active='infos_gerais'"
            x-bind:class="active=='infos_gerais' ? 'bg-gray-100 rounded-t-lg' : 'hover:text-gray-600 hover:bg-gray-50'"
          >
            <span class="text-blue-700" x-show="active=='infos_gerais'">#</span>
            Informações gerais
          </h2>
        </li>
        <li>
          <h2
            class="inline-block p-4 rounded-t-lg cursor-pointer"
            id="entrada_publico"
            x-on:click="active='entrada_publico'"
            x-bind:class="active=='entrada_publico' ? 'bg-gray-100 rounded-t-lg' : 'hover:text-gray-600 hover:bg-gray-50'"
          >
            <span class="text-blue-700" x-show="active=='entrada_publico'"
              >#</span
            >
            Entrada ao público
          </h2>
        </li>
      </ul>
      <article
        class="mt-4 pb-4 border-b border-blue-700/20"
        aria-labelledby="sobre_evento"
        x-show="active=='sobre_evento'"
      >
        <div class="mt-4 text-lg">
          {{ $campeonato->sobre }}
        </div>
      </article>
      <article
        class="mt-4 pb-4 border-b border-blue-700/20"
        aria-labelledby="ginasio"
        x-show="active=='ginasio'"
      >
        <div class="mt-4 text-lg">
          {{ $campeonato->local }}
        </div>
      </article>
      <article
        class="mt-4 pb-4 border-b border-blue-700/20"
        aria-labelledby="infos_gerais"
        x-show="active=='infos_gerais'"
      >
        <div class="mt-4 text-lg">
          {{ $campeonato->informacoes }}
        </div>
      </article>
      <article
        class="mt-4 pb-4 border-b border-blue-700/20"
        aria-labelledby="entrada_publico"
        x-show="active=='entrada_publico'"
      >
        <div class="mt-4 text-lg">
          {{ $campeonato->entradaPublico }}
        </div>
      </article>
      

      @if($campeonato->fase_id == 1)

      <div class="mt-8 flex justify-center">
        <a
          href="./inscricao.html"
          class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800"
        >
          Inscreva-se agora mesmo
        </a>
      </div>

      @elseif($campeonato->fase_id == 2)

      <div class="mt-8 flex justify-center">
        <a
          href="./chave_listagem.html"
          class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800"
        >
          Fique por dentro do chaveamento
        </a>
      </div>

      @else

      <div class="mt-8 flex justify-center">
        <a
          href="./resultados.html"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        >
          Veja os resultados
        </a>
      </div>

      @endif

    </main>
    <footer
      class="bg-white rounded-lg shadow max-w-7xl m-4 md:mx-auto md:mt-4 outline outline-1 outline-gray-300"
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