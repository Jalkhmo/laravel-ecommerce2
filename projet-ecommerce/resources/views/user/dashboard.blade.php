@extends('layouts.app')

@section('content')
<h1>Bienvenue, {{ $user->name }}</h1>
<h2>Vos Commandes</h2>
<ul>
    @foreach($orders as $order)
        <li>
            <p>Commande #{{ $order->id }} - Statut : {{ $order->status }}</p>
            <ul>
                @foreach($order->products as $product)
                    <li>{{ $product->name }} (x{{ $product->pivot->quantity }})</li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
@endsection
