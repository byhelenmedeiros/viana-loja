<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-800">
  <nav class="bg-white shadow mb-6">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="{{ route('admin.products.index') }}" class="text-xl font-bold">Admin • Produtos</a>
      <div>
        <a href="{{ route('admin.products.create') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
          <i class="fas fa-plus-circle mr-1"></i> Novo Produto
        </a>
      </div>
    </div>
  </nav>
  <main class="container mx-auto px-4">
    @if(session('success'))
      <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
        <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
      </div>
    @endif
    @yield('content')
  </main>
</body>
</html>
