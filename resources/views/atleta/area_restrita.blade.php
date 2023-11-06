@extends('app')

@section('title', 'Campeonato de Jiu Jitsu')

@section('conteudo') 
    <header>
      <nav class="bg-white border-gray-200">
        <div
          class="max-w-screen-xl flex flex-wrap lg:flex-nowrap items-center gap-12 mx-auto p-4"
        >
          <div class="flex items-center gap-8 w-full">
            <a href="#/" class="flex items-center">
              <img src="{{ url('img/logo.svg') }}" alt="Logo" />
              <p id="logo" class="text-2xl whitespace-nowrap">OSU BJJ</p>
            </a>
            <p class="font-bold whitespace-nowrap" id="logo">Área do atleta</p>
          </div>

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
          <div class="hidden w-full md:block" id="navbar-default">
            <ul
              class="flex flex-col lg:flex-row lg:items-center font-medium gap-4 w-full"
            >
              <li class="ml-auto">
                <a
                  href="{{ route('logout') }}"
                  class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center"
                >
                  Sair
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <h1 class="text-blue-700 text-3xl text-center">
        Veja os seus certificados
      </h1>
      <p class="text-center text-gray-800">
        Aqui constam os certificados de todos os torneios que você já participou
      </p>
      <div class="mt-4 rounded-xl overflow-hidden max-w-4xl mx-auto">
        <table class="w-full">
          <thead class="bg-blue-700 text-white">
            <tr>
              <th class="p-3">Data do evento</th>
              <th class="p-3">Nome do evento</th>
              <th class="p-3">Leia mais</th>
              <th class="p-3">Ver certificado</th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd:bg-gray-100 even:bg-gray-50">
              <td class="p-4">23/11/2023</td>
              <td class="p-4">Campeonato Regional Santista</td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="#"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Detalhes do evento
                  </a>
                </div>
              </td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="./certificado_participacao.html"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Certificado
                  </a>
                </div>
              </td>
            </tr>
            <tr class="odd:bg-gray-100 even:bg-gray-50">
              <td class="p-4">23/11/2023</td>
              <td class="p-4">Campeonato Regional Santista</td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="#"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Detalhes do evento
                  </a>
                </div>
              </td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="./certificado_participacao.html"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Certificado
                  </a>
                </div>
              </td>
            </tr>
            <tr class="odd:bg-gray-100 even:bg-gray-50">
              <td class="p-4">23/11/2023</td>
              <td class="p-4">Campeonato Regional Santista</td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="../integra.html"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Detalhes do evento
                  </a>
                </div>
              </td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="./certificado_participacao.html"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Certificado
                  </a>
                </div>
              </td>
            </tr>
            <tr class="odd:bg-gray-100 even:bg-gray-50">
              <td class="p-4">23/11/2023</td>
              <td class="p-4">Campeonato Regional Santista</td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="#"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Detalhes do evento
                  </a>
                </div>
              </td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="./certificado_participacao.html"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Certificado
                  </a>
                </div>
              </td>
            </tr>
            <tr class="odd:bg-gray-100 even:bg-gray-50">
              <td class="p-4">23/11/2023</td>
              <td class="p-4">Campeonato Regional Santista</td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="#"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Detalhes do evento
                  </a>
                </div>
              </td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="./certificado_participacao.html"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Certificado
                  </a>
                </div>
              </td>
            </tr>
            <tr class="odd:bg-gray-100 even:bg-gray-50">
              <td class="p-4">23/11/2023</td>
              <td class="p-4">Campeonato Regional Santista</td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="#"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Detalhes do evento
                  </a>
                </div>
              </td>
              <td class="p-4">
                <div class="flex justify-center">
                  <a
                    href="./certificado_participacao.html"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Certificado
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
    <footer
      class="bg-white rounded-lg shadow max-w-7xl m-4 md:mx-auto md:mt-4 outline outline-1 outline-gray-300"
    >
      <p class="text-sm text-gray-500 text-center py-2">
        © 2023 <a href="/" class="hover:underline">OSU BJJ</a>. Todos os
        direitos reservados.
      </p>
    </footer>
@endsection
