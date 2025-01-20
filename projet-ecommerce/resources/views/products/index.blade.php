@extends('layouts.app')

@section('content')
<h1>Produits</h1>
<div>
    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>{{ $product->price }} €</p>
            <a href="{{ route('product.show', $product->id) }}">Voir</a>
        </div>
    @endforeach
</div>
{{ $products->links() }}
@endsection