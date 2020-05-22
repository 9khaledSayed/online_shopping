<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'price', 'sale_price', 'volume', 'quantity', 'description', 'image1', 'image2', 'image3','category_id'];
  
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
