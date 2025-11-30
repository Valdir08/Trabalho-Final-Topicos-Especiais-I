@extends('layout')
@section('title','Produto')
@section('content')
<h4>{{ $product->title }}</h4>
<p><strong>Categoria:</strong> {{ $product->category }}</p>
@if($product->image_path)
  <p><img src="{{ asset('storage/'.$product->image_path) }}" style="max-width:300px"></p>
@endif
<p>{{ $product->description }}</p>
<a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
