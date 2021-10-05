<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\Product;
use Livewire\Component;
use App\Models\HomeSlider;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status', 1)->get();

        $latestproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);

        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $nbr_of_prodiucts = $category->nbr_of_products;
        $sale_products = Product::where('sale_price', '>', 0)->inRandomOrder()->get()->take(10);

        return view('livewire.home-component', [
            'sliders' => $sliders,
            'latestproducts' => $latestproducts,
            'categories' => $categories,
            'nbr_of_prodiucts' => $nbr_of_prodiucts,
            'sale_products' => $sale_products,
        ])->layout('layouts.base');
    }
}
