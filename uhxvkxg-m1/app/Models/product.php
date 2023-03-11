<?php

namespace App\Models;
use App\Models\basket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    protected $table="catalogs";
    protected $fillable=['name','img','price','contry','production_yaer','description','category'];
}
