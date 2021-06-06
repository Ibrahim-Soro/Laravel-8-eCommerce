<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ShopComponent extends Component
{
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate(Product::class);
        session()->flash('success_message', 'Produit ajouté au panier avec succès !');
        return redirect()->route('product.cart');
    }

    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-component', compact('products'))->layout('layouts.base');
    }
}
