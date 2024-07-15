


@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('storage/images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        <p class="card-text">€{{ $product->price }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Mostra Dettagli</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
