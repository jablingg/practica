<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bascet extends Model
{
    protected $table="bascets";
    protected $fillable=['user_id', 'product_id','quantity'];
    public function products(){
        return $this->hasOne(Product::class, 'id','product_id');
    }
}
