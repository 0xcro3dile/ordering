<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
   'product_id','cart_id','qty','price','line_total',
    ];
}
