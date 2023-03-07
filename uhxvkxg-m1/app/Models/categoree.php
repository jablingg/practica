<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoree extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'price',
        'category',
        'description',
        'quantity',
        'production_yaer',
        'contry',
        'category'
    ];

}
