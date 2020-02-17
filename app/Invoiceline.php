<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoiceline extends Model
{
    protected $fillable = [
      'payment_id',"invoice_id",'amount_before','amount_after','line_total','platform_share',
    ];
}
