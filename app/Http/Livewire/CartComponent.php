<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        session()->flash('success_message', "La quantité de ce produit est passé à $qty !");
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        session()->flash('success_message', "La quantité de ce produit est passé à $qty !");
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message', "Produit retiré du panier avec succès !");
    }

    public function destroyAll()
    {
        Cart::destroy();
        session()->flash('success_message', "Panier vidé avec succès !");
    }

    public function render()
    {
        $popular_products = Product::inRandomOrder()->limit(12)->get();
        return view('livewire.cart-component', compact('popular_products'))->layout('layouts.base');
    }
}
