<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title','description','price','likes','discount','prepare_time','chef','restaurant_id','user_id'
    ];
}
