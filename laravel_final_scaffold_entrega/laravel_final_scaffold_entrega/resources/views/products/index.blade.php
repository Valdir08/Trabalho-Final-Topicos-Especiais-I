@extends('layout')

@section('title', 'Produtos')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h4>Produtos</h4>
  <form method="GET" action="{{ route('products.index') }}" class="d-flex">
    <select name="category" class="form-select me-2">
      <option value="">Todas</option>
      <option value="farmacia" {{ request('category')=='farmacia' ? 'selected' : '' }}>Farmácia</option>
      <option value="concessionaria" {{ request('category')=='concessionaria' ? 'selected' : '' }}>Concessionária</option>
    </select>
    <button class="btn btn-outline-secondary">Filtrar</button>
  </form>
</div>

@if($category)
  <p><small>Última categoria visitada (cookie): <strong>{{ $category }}</strong></small></p>
@endif

<table class="table table-striped">
  <thead><tr><th>#</th><th>Título</th><th>Categoria</th><th>Imagem</th><th>Ações</th></tr></thead>
  <tbody>
    @foreach($products as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td><a href="{{ route('products.show', $p) }}">{{ $p->title }}</a></td>
      <td>{{ $p->category }}</td>
      <td>
        @if($p->image_path)
          <img src="{{ asset('storage/'.$p->image_path) }}" style="height:50px">
        @endif
      </td>
      <td>
        <a class="btn btn-sm btn-primary" href="{{ route('products.edit', $p) }}">Editar</a>
        <form action="{{ route('products.destroy', $p) }}" method="POST" style="display:inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir?')">Excluir</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $products->links() }}
@endsection
