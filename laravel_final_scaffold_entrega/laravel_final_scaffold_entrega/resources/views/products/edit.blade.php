@extends('layout')
@section('title','Editar Produto')
@section('content')
<h4>Editar Produto</h4>
<form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
  @csrf @method('PUT')
  <div class="mb-3">
    <label class="form-label">Título</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $product->title) }}">
    @error('title')<div class="text-danger">{{ $message }}</div>@enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Categoria</label>
    <input type="text" name="category" class="form-control" value="{{ old('category', $product->category) }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Imagem (PNG/JPG) - novo arquivo sobrescreve</label>
    <input type="file" name="image" class="form-control">
    @if($product->image_path)
      <p>Imagem atual: <img src="{{ asset('storage/'.$product->image_path) }}" style="height:50px"></p>
    @endif
  </div>
  <button class="btn btn-primary">Atualizar</button>
</form>
@endsection
