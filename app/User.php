<?php

namespace App;

use Carbon\Carbon;
use Facade\Ignition\Middleware\AddDumps;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'password','email_token','mobile_token','verified_email','verified_mobile','billing_address','shipping_address','avatar',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //RealtionShips

    public function restaurants(){
        return $this->hasMany(
            Restaurant::class);
    }
    public function customerOrders(){
        return $this->hasMany(
            Order::class);
    }
    public function vendorOrders(){
        return $this->hasManyThrough(
            Order::class,Product::class);
    }
    public function customerPayments(){
        $this->hasMany(
            Payment::class, 'customer_id','id');
    }
    public function vendorPayments(){
        $this->hasMany(
            Payment::class, 'vendor_id','id');
    }
    public function products(){
        return $this->hasMany(
            Product::class);
    }
    public function follows(){
        return $this->hasMany(Follow::class);
    }
    public function favourites(){
        return $this->hasMany(
            Favourite::class
        );
    }
    public function billingAddress(){
        return $this->hasMany(
            Address::class,'id',"billing_address");
    }
    public function shippingAddress(){
        return $this->hasMany(
            Address::class,'id',"shipping_address");
    }
    public function cart(){
        return $this->hasMany(
            Cart::class);
    }
    public function transactions(){
        return $this->hasMany(
            Transaction::class
        );
    }
    public function invoices(){
        return $this->hasMany(
          Invoice::class
        );
    }
}
