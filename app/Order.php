<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['customer_id','name','phone','email','country','government','city','address','product_name','product_price','product_image','quantity','amount'];

  public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Customer::class);
    }
}
