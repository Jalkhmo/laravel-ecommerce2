@extends('layouts.app')

@section('content')
<h1>Administration</h1>
<h2>Produits</h2>
<ul>
    @foreach($products as $product)
        <li>
            {{ $product->name }} - {{ $product->price }} €
            <form action="{{ route('admin.update.product', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="text" name="price" value="{{ $product->price }}">
                <button type="submit">Mettre à jour</button>
            </form>
        </li>
    @endforeach
</ul>

<h2>Commandes</h2>
<ul>
    @foreach($orders as $order)
        <li>
            Commande #{{ $order->id }} - Utilisateur : {{ $order->user->name }} - Statut : {{ $order->status }}
            <form action="{{ route('admin.process.order', $order->id) }}" method="POST">
                @csrf
                <button type="submit">Marquer comme traitée</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection