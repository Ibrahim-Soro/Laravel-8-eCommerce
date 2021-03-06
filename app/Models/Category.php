<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function getFormatedPrice(){
        $price = number_format($this->price, 0, '', ' ') . " Fcfa";
        return $price;
    }
}
