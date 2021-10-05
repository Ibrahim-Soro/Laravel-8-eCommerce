<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCategory extends Model
{
    use HasFactory;

    protected $table = 'home_categories';

    public function getFormatedPrice(){
        $price = number_format($this->price, 0, '', ' ') . " Fcfa";
        return $price;
    }
}
