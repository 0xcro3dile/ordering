<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo_code extends Model
{
    protected $fillable = [
   'discount','code','end_at','status','restaurant_id',
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
