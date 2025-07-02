@extends('layouts.admin')

@section('title', 'Produtos')
@section('header', 'Gestão de Produtos')

@section('content')
  <div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nome (PT)</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Preço</th>
          <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Ações</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        @forelse($products as $p)
        <tr>
          <td class="px-6 py-4 whitespace-nowrap">{{ $p->id }}</td>
          <td class="px-6 py-4 whitespace-nowrap">{{ $p->name_pt }}</td>
          <td class="px-6 py-4 whitespace-nowrap">{{ number_format($p->price,2) }}€</td>
          <td class="px-6 py-4 whitespace-nowrap text-right">
            <a href="{{ route('admin.products.show', $p) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">
              <i class="fas fa-eye"></i>
            </a>
            <a href="{{ route('admin.products.edit', $p) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">
              <i class="fas fa-edit"></i>
            </a>
            <form action="{{ route('admin.products.destroy', $p) }}" method="POST" class="inline-block" onsubmit="return confirm('Apagar este produto?');">
              @csrf @method('DELETE')
              <button type="submit" class="text-red-600 hover:text-red-900">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="4" class="px-6 py-4 text-center text-gray-500">Sem produtos</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection
