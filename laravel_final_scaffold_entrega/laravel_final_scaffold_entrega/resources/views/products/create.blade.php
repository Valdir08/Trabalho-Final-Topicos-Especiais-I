@extends('layout')
@section('title','Novo Produto')
@section('content')
<h4>Criar Produto</h4>
<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label class="form-label">Título</label>
    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
    @error('title')<div class="text-danger">{{ $message }}</div>@enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Categoria</label>
    <input type="text" name="category" class="form-control" value="{{ old('category') }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Imagem (PNG/JPG)</label>
    <input type="file" name="image" class="form-control">
    @error('image')<div class="text-danger">{{ $message }}</div>@enderror
  </div>
  <button class="btn btn-success">Salvar</button>
</form>
@endsection
