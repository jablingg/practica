<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basket extends Model
{
    use HasFactory;
   protected $table="baskets";
   protected $filltable=['user_id',
   'product_id',
   'quantity',];
   public function products(){
    return $this->hasone(basketController::class, 'id', 'product_id');
   }
}
