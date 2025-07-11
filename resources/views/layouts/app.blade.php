 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Viana Loja') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Vite (Tailwind + DaisyUI + FontAwesome) -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

  {{-- Navbar DaisyUI --}}
  @include('partials.nav')

  {{-- Page Heading --}}
  @isset($header)
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>
  @endisset

  {{-- Page Content --}}
  <main class="container mx-auto px-4 py-6">
    {{ $slot }}
  </main>

  {{-- Mobile menu toggle script --}}
  <script>
    document.getElementById('btn-mobile')?.addEventListener('click', () => {
      document.querySelector('nav .menu-horizontal')?.classList.toggle('hidden');
    });
  </script>
</body>
</html>
