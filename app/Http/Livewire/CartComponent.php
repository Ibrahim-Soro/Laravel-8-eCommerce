<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CartComponent extends Component
{
    public function render()
    {
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.cart-component', compact('popular_products'))->layout('layouts.base');
    }
}
