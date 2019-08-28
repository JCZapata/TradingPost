<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Stock;

class Product extends Model
{
  protected $guarded = [];


  public function category()
  {
    return $this->belongsTo(Category::class);
  }
  public function stock()
  {
    return $this->hasOne(Stock::class);
  }
}
