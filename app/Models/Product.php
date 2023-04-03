<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function sumPricesByQuantities($products, $productsInSession)
    {
        $total = 0;
        foreach ($products as $product) {
            $total = $total + ($product['price'] * $productsInSession[$product['id']]);
        }
        return $total;
    }

    public function getId()
    {
        return $this->id;
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    
    public function getPrice()
    {
        return $this->price;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
}
