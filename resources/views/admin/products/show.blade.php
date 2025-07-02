@extends('layouts.admin')
@section('title', 'Detalhes do Produto')

@section('content')
  <div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4">{{ $product->name_pt }} / {{ $product->name_en }}</h2>
    <div class="flex space-x-6">
      <div class="w-1/3">
        @if($product->image_path)
          <img src="{{ asset('storage/' . $product->image_path) }}" class="w-full rounded">
        @else
          <div class="h-48 bg-gray-200 flex items-center justify-center">
            <i class="fas fa-image fa-2x text-gray-400"></i>
          </div>
        @endif
      </div>
      <div class="w-2/3">
        <p class="mb-2"><strong>Descrição PT:</strong> {{ $product->description_pt }}</p>
        <p class="mb-2"><strong>Descrição EN:</strong> {{ $product->description_en }}</p>
        <p class="mb-2"><strong>Preço:</strong> {{ number_format($product->price,2) }}€</p>
        <p class="text-sm text-gray-500">Criado em: {{ $product->created_at->format('d/m/Y H:i') }}</p>
      </div>
    </div>
    <div class="mt-6">
      <a href="{{ route('admin.products.index') }}"
         class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-md">
        <i class="fas fa-arrow-left mr-2"></i> Voltar
      </a>
    </div>
  </div>
@endsection
