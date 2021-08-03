<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function genarateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeCategory()
    {
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash("message", "Nouvelle catégorie ajoutée avec succès !");
        return redirect()->route("admin.categories");
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.admin');
    }
}
