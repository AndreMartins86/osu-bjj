@extends('app')

@section('title', 'Campeonato de Jiu Jitsu')

@section('conteudo')
@if (session('message'))
<div class="container">
    <div class="alert alert-danger" role="alert">
      {{ session('message') }}      
    </div>
</div>
@endif
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
@endif
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
                  class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                  aria-current="page"
                  >Início</a
                >
              </li>
              <li>
                <a
                  href="{{ route('torneios') }}"
                  class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                  >Torneios</a
                >
              </li>
              <li>
                <a
                  href="{{ route('homeAtleta') }}"
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
    <main>
      <section aria-labelledby="banner_title" class="h-[600px] relative">
        <img
          src="{{ url('img/banner.jpg') }}"
          alt="Crianças lutando jiu jitsu brasileiro"
          class="w-full h-full object-cover"
        />
        <div class="grid bg-black/70 absolute inset-0 place-items-center">
          <h1
            class="text-5xl leading-snug text-white text-center font-normal uppercase"
            id="banner_title"
          >
            O maior site de torneios
            <span class="block"> de BJJ do Brasil </span>
            <span class="block">
              Leia, se increva e
              <strong class="font-bold text-blue-700 underline">lute</strong>
            </span>
          </h1>
        </div>
      </section>
      <section aria-labelledby="destaques_titulo" class="py-12">
        <h2
          class="font-bold text-center text-3xl uppercase"
          id="destaques_titulo"
        >
          Torneios em destaque
        </h2>
        <div class="max-w-7xl mx-2 lg:mx-auto mt-6 flex flex-col lg:flex-row gap-4">




          <h2>arrumar os destaques</h2>

          @foreach($campeonatos as $campeonato)


          <article
            class="relative w-full rounded-xl overflow-hidden shadow-xl p-2 outline outline-1 outline-gray-400 text-gray-900 hover:-translate-y-2 transition-transform duration-300"
          >
            <img
              src="{{ url($campeonato->imagem) }}"
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
                <p class="text-2xl font-bold" data-calendar>{{  date('d',strtotime($campeonato->dataCampeonato))  }}</p>
                <p>{{ strftime("%b", strtotime($campeonato->dataCampeonato)) }}</p>
              </div>

              @if($campeonato->fase_id == 1)
              <p
               class="absolute -top-3 left-24 bg-green-600 px-3 text-white rounded-xl">        
            @elseif($campeonato->fase_id == 2)
              <p
                class="absolute -top-3 left-24 bg-yellow-600 px-3 text-white rounded-xl"
              >
            @else
             <p
                class="absolute -top-3 left-24 bg-blue-700 px-3 text-white rounded-xl"
              >
            @endif
                {{ $campeonato->getFase() }}
              </p>
              <h3 class="mt-4 uppercase text-xl min-h-[60px]">
                {{ $campeonato->titulo }}
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
                {{ $campeonato->getTipo() }}
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
                {{ $campeonato->cidade .'-'.$campeonato->getEstadoSigla()  }}
              </p>
            </div>
            <a
              href="{{ route('integra', ['campeonato' => $campeonato, 'slug' => $campeonato->friendUrl()]) }}"
              {{-- title="Saiba mais sobre Campeonato regional santista 2023" --}}
              title="Saiba mais sobre {{ $campeonato->titulo }}"
              class="absolute inset-0"
            ></a>
          </article>

          @endforeach

         
        </div>
      </section>
      <section aria-labelledby="torneios_titulo" class="py-12">
        <h2
          class="font-bold text-center text-3xl uppercase"
          id="torneios_titulo"
        >
          Demais competições
        </h2>
        <div
          class="max-w-7xl mx-2 lg:mx-auto mt-6 flex flex-col lg:flex-row gap-4"
        >
          <article
            class="relative w-full rounded-xl overflow-hidden shadow-xl p-2 outline outline-1 outline-gray-400 text-gray-900 hover:-translate-y-2 transition-transform duration-300"
          >
            <img
              src="{{ url('img/torneio-card.jpg') }}"
              alt="Imagem do torneio"
              class="rounded-md w-full h-[200px] object-cover"
            />
            <div class="p-3 relative">
              <div
                class="absolute -top-14 bg-white px-4 py-2 rounded-md shadow-md shadow-gray-500 text-center"
              >
                <p class="text-2xl font-bold" data-calendar>21</p>
                <p>NOV</p>
              </div>
              <p
                class="absolute -top-3 left-24 bg-yellow-600 px-3 text-white rounded-xl"
              >
                Chaveamento
              </p>
              <h3 class="mt-4 uppercase text-xl min-h-[60px]">
                Campeonato regional santista 2023
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
                Kimono
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
                Santos-SP
              </p>
            </div>
            <a
              href="./integra.html"
              title="Saiba mais sobre Campeonato regional santista 2023"
              class="absolute inset-0"
            ></a>
          </article>



          {{-- --}}






        </div>
        <p class="mt-4 max-w-7xl mx-auto flex justify-center md:justify-end">
          <a
            href="{{ route('torneios') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Ver todas as competições
            <svg
              class="w-3.5 h-3.5 ml-2"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 10"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9"
              />
            </svg>
          </a>
        </p>
      </section>
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
            <a href="{{ route('home') }}" class="mr-4 hover:underline md:mr-6"
              >Início</a
            >
          </li>
          <li>
            <a href="{{ route('torneios') }}" class="mr-4 hover:underline md:mr-6"
              >Torneios</a
            >
          </li>
          <li>
            <a href="{{ route('homeAtleta') }}" class="mr-4 hover:underline md:mr-6"
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

