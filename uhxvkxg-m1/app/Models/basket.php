<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class basket extends Model
{
   protected $table="baskets";
   protected $filltable=['user_id',
   'product_id',
   'quantity',];
   public function products(){
    return $this->hasone(product::class, 'id', 'product_id');
   }
}
