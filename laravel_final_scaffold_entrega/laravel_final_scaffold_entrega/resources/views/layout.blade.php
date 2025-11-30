<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Final - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('products.index') }}">Sistema APS</a>
    <div>
      <a class="btn btn-sm btn-primary" href="{{ route('products.create') }}">Novo Produto</a>
    </div>
  </div>
</nav>
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @yield('content')
</div>
</body>
</html>
