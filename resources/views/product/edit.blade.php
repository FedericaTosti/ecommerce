<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Prodotto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ecommerce</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Vista Prodotti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.create') }}">Gestione Prodotti</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Modifica Prodotto</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantità</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
            </div>
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <small class="form-text text-muted">Carica una nuova immagine solo se vuoi sostituire quella attuale.</small>
                <img src="{{ asset('storage/images/'.$product->image) }}" class="img-fluid mt-2" width="150" alt="{{ $product->name }}">
            </div>
            <button type="submit" class="btn btn-warning">Aggiorna</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->


@extends('layouts.app')

<!-- @section('title', 'Modifica Prodotto')

@section('content')
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome Prodotto</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" class="form-control" id="description" required>{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantità</label>
            <input type="number" name="quantity" class="form-control" id="quantity" value="{{ $product->quantity }}" required>
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="file" name="image" class="form-control-file" id="image">
            @if($product->image)
                <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail mt-2" style="width: 150px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection -->



@section('title', 'Modifica Prodotto')

@section('content')
    <h1 class="mb-4">Modifica Prodotto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantità</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $product->quantity }}" required>
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna Prodotto</button>
    </form>
@endsection

