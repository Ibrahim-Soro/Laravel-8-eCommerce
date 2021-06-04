<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    public function formatedPrice(){
        $price = number_format($this->regular_price, 0, '', ' ') . " Fcfa";
        return $price;
    }
}
