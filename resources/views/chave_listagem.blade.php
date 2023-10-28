@extends('app')

@section('title', 'Campeonato de Jiu Jitsu')

@section('conteudo')
    <header>
      <nav class="bg-white border-gray-200">
        <div
          class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
        >
          <a href="./index.html" class="flex items-center">
            <img src="imgs/logo.svg" alt="Logo" />
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
                  href="./index.html"
                  class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                  aria-current="page"
                  >Início</a
                >
              </li>
              <li>
                <a
                  href="./torneios.html"
                  class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
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
    <section class="relative h-[300px]">
      <img
        src="imgs/integra.jpg"
        alt="Lutadores de Jiu jitsu executam golpe durante treino"
        class="w-full h-full object-cover"
      />
      <div class="bg-black/70 grid place-items-center absolute inset-0">
        <div>
          <h1 class="text-center text-4xl text-white mt-4 mb-8">
            Campeonato Regional Santista 2023
          </h1>
          <div class="flex gap-2 justify-center text-sm">
            <p class="text-white flex items-center gap-2">
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
                  d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5"
                />
              </svg>
              241223
            </p>
            <p class="text-white flex items-center gap-2">
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
            <p class="text-white flex items-center gap-2">
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
            <p class="text-white flex items-center gap-2">
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
                  d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                />
              </svg>
              <time datetime="2023-11-21">21/11/2023</time>
            </p>
          </div>
        </div>
      </div>
    </section>
    <main class="max-w-7xl mx-2 lg:mx-auto">
      <h2 class="text-center text-3xl text-blue-700 mt-4 mb-2">
        Chaveamento do torneio
      </h2>
      <p class="mb-6 text-center text-gray-900">
        Clique em uma categoria abaixo para ter mais detalhes
      </p>
      <section class="rounded-md outline outline-1 outline-gray-200 px-2 py-4">
        <h3 class="text-2xl text-center my-3">
          <span class="bg-yellow-900 px-3 rounded-md text-white"
            >Faixa Marrom</span
          >
        </h3>
        <div class="flex gap-4">
          <div data-peso class="w-full">
            <h4 class="text-2xl text-gray-800 my-2">Peso Leve</h4>
            <ul class="border-t-4 border-b-4 border-blue-700">
              <li
                class="odd:bg-gray-200 even:bg-gray-100 flex items-stretch border-b border-gray-100"
              >
                <a href="./chave_integra.html" class="py-4 pl-2 block w-full">
                  Masculino
                </a>
              </li>
              <li
                class="odd:bg-gray-200 even:bg-gray-100 flex items-stretch border-b border-gray-100"
              >
                <a href="./chave_integra.html" class="py-4 pl-2 block w-full">
                  Feminino
                </a>
              </li>
            </ul>
          </div>
          <div data-peso class="w-full">
            <h4 class="text-2xl text-gray-800 my-2">Peso Pesado</h4>
            <ul class="border-t-4 border-b-4 border-blue-700">
              <li
                class="odd:bg-gray-200 even:bg-gray-100 flex items-stretch border-b border-gray-100"
              >
                <a href="./chave_integra.html" class="py-4 pl-2 block w-full">
                  Masculino
                </a>
              </li>
              <li
                class="odd:bg-gray-200 even:bg-gray-100 flex items-stretch border-b border-gray-100"
              >
                <a href="./chave_integra.html" class="py-4 pl-2 block w-full">
                  Feminino
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section
        class="mt-8 rounded-md outline outline-1 outline-gray-200 px-2 py-4"
      >
        <h3 class="text-2xl text-center my-3">
          <span class="bg-black px-3 rounded-md text-white">Faixa Preta</span>
        </h3>
        <div class="flex gap-4">
          <div data-peso class="w-full">
            <h4 class="text-2xl text-gray-800 my-2">Peso Leve</h4>
            <ul class="border-t-4 border-b-4 border-blue-700">
              <li
                class="odd:bg-gray-200 even:bg-gray-100 flex items-stretch border-b border-gray-100"
              >
                <a href="./chave_integra.html" class="py-4 pl-2 block w-full">
                  Masculino
                </a>
              </li>
              <li
                class="odd:bg-gray-200 even:bg-gray-100 flex items-stretch border-b border-gray-100"
              >
                <a href="./chave_integra.html" class="py-4 pl-2 block w-full">
                  Feminino
                </a>
              </li>
            </ul>
          </div>
          <div data-peso class="w-full">
            <h4 class="text-2xl text-gray-800 my-2">Peso Pesado</h4>
            <ul class="border-t-4 border-b-4 border-blue-700">
              <li
                class="odd:bg-gray-200 even:bg-gray-100 flex items-stretch border-b border-gray-100"
              >
                <a href="./chave_integra.html" class="py-4 pl-2 block w-full">
                  Masculino
                </a>
              </li>
              <li
                class="odd:bg-gray-200 even:bg-gray-100 flex items-stretch border-b border-gray-100"
              >
                <a href="./chave_integra.html" class="py-4 pl-2 block w-full">
                  Feminino
                </a>
              </li>
            </ul>
          </div>
        </div>
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
            <a href="#" class="mr-4 hover:underline md:mr-6">
              Área do competidor
            </a>
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