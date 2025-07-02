 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', config('app.name', 'Viana Loja'))</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex h-screen bg-gray-100 font-sans antialiased">

  {{-- Sidebar Fixa --}}
  <aside class="w-64 bg-base-200 p-4 flex flex-col">
    <a href="{{ route('dashboard') }}" class="flex items-center mb-8">
      <i class="fas fa-wine-bottle text-2xl mr-2"></i>
      <span class="text-xl font-bold">{{ config('app.name', 'Viana Loja') }}</span>
    </a>

    <nav class="flex-1">
      <ul class="menu bg-base-200 rounded-box">
        <li class="mb-1">
          <a href="{{ route('admin.products.index') }}" @class(['active' => request()->routeIs('admin.products.*')])>
            <i class="fas fa-box-open mr-2"></i> Produtos
          </a>
        </li>
        {{-- adiciona mais items aqui --}}
        <li class="mb-1">
          <a href="{{ route('dashboard') }}" @class(['active' => request()->routeIs('dashboard')])>
            <i class="fas fa-chart-line mr-2"></i> Dashboard
          </a>
        </li>
      </ul>
    </nav>

    <div class="mt-auto pt-4 border-t border-base-300">
      <ul class="menu bg-base-200 rounded-box">
        <li>
          <a href="{{ route('profile.edit') }}">
            <i class="fas fa-user-cog mr-2"></i> Perfil
          </a>
        </li>
        <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left">
              <i class="fas fa-sign-out-alt mr-2"></i> Sair
            </button>
          </form>
        </li>
      </ul>
    </div>
  </aside>

  <div class="flex-1 flex flex-col overflow-hidden">
    {{-- Topbar Fixa --}}
    <header class="h-16 bg-white shadow flex items-center px-6">
      <button id="btn-menu" class="lg:hidden btn btn-ghost mr-4">
        <i class="fas fa-bars text-xl"></i>
      </button>
      <h1 class="text-2xl font-semibold">@yield('header', 'Dashboard')</h1>
    </header>

    {{-- Conteúdo --}}
    <main class="flex-1 overflow-auto p-6 bg-gray-50">
      @yield('content')
    </main>
  </div>

  {{-- Script para mobile toggle da sidebar --}}
  <script>
    const btnMenu = document.getElementById('btn-menu');
    const sidebar = document.querySelector('aside');
    btnMenu?.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });
  </script>
</body>
</html>
