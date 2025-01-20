<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function store(Request $request)
    {
        $cart = session()->get('cart', []);

        $cart[$request->id] = [
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity
        ];

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }
}