@extends('layouts.admin')
@section('title', 'Editar Produto')

@section('content')
  <div class="bg-white shadow rounded-lg p-6">
    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf @method('PUT')

      <div>
        <label class="block text-sm font-medium text-gray-700">Nome (PT)</label>
        <input name="name_pt" value="{{ old('name_pt', $product->name_pt) }}"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
        @error('name_pt')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
      </div>

      {{-- repete os outros campos como em create, preenchendo com $product->... --}}

      <div>
        <label class="block text-sm font-medium text-gray-700">Imagem Atual</label>
        @if($product->image_path)
          <img src="{{ asset('storage/' . $product->image_path) }}" class="h-24 mb-2">
        @else
          <p class="text-gray-500">Sem imagem</p>
        @endif
        <label class="block text-sm font-medium text-gray-700">Substituir Imagem</label>
        <input name="image" type="file" class="mt-1 block w-full"/>
        @error('image')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
      </div>

      <div class="pt-4">
        <button type="submit"
          class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md">
          <i class="fas fa-save mr-2"></i> Atualizar
        </button>
      </div>
    </form>
  </div>
@endsection
