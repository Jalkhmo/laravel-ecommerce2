@extends('layouts.app')

@section('content')
<h1>Votre Panier</h1>
@if(session('cart'))
    <ul>
        @foreach(session('cart') as $id => $details)
            <li>
                <h2>{{ $details['name'] }}</h2>
                <p>{{ $details['price'] }} €</p>
                <p>Quantité : {{ $details['quantity'] }}</p>
                <form action="{{ route('cart.destroy', $id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>Votre panier est vide.</p>
@endif
@endsection