<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['productCode', 'productName', 'productPrice', 'productDescription', 'productImage'];
    public function getRouteKeyName()
    {
        return 'productCode';
    }
}
