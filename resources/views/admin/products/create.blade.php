@extends('layouts.admin')
@section('title', 'Criar Produto')

@section('content')
  <div class="bg-white shadow rounded-lg p-6">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf

      <div>
        <label class="block text-sm font-medium text-gray-700">Nome (PT)</label>
        <input name="name_pt" value="{{ old('name_pt') }}"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
        @error('name_pt')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Nome (EN)</label>
        <input name="name_en" value="{{ old('name_en') }}"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
        @error('name_en')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Descrição (PT)</label>
        <textarea name="description_pt" rows="3"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description_pt') }}</textarea>
        @error('description_pt')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Descrição (EN)</label>
        <textarea name="description_en" rows="3"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description_en') }}</textarea>
        @error('description_en')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Preço (€)</label>
        <input name="price" type="number" step="0.01" value="{{ old('price') }}"
          class="mt-1 block w-32 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
        @error('price')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Imagem</label>
        <input name="image" type="file"
          class="mt-1 block w-full text-gray-700"/>
        @error('image')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
      </div>

      <div class="pt-4">
        <button type="submit"
          class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md">
          <i class="fas fa-save mr-2"></i> Guardar
        </button>
      </div>
    </form>
  </div>
@endsection
