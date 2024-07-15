@extends('layouts.app')

@section('title', 'Benvenuti')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Benvenuti nel nostro E-commerce!</h1>
        <p class="lead">Qui puoi trovare una vasta selezione di prodotti.</p>
        <hr class="my-4">
        <p>Scopri i nostri prodotti cliccando il pulsante qui sotto.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Visualizza Prodotti</a>
    </div>
@endsection
