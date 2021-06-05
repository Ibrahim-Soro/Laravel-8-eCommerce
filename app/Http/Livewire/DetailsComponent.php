<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->firstOrFail();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(8)->get();
        return view('livewire.details-component', [
            'product' => $product,
            'popular_products' => $popular_products,
            'related_products' => $related_products
        ])->layout('layouts.base');
    }
}