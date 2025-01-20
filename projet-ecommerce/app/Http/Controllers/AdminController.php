<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->back()->with('success', 'Produit mis à jour');
    }

    public function markOrderAsProcessed($id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => 'processed']);
        return redirect()->back()->with('success', 'Commande marquée comme traitée');
    }


}
