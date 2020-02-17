<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
      'title','description','address_id','user_id'
    ];

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function promoCode(){
        return $this->hasMany(Promo_code::class);
    }

    public function address(){
        return $this->hasOne(Address::class);
    }




}
