<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
      'order_id','amount','status','transaction_status','ref_number','customer_id','vendor_id'
    ];
}
