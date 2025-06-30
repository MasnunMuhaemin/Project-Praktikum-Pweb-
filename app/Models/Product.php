<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Product extends Model
{
    protected $fillable = [
        'kode_product',
        'name',
        'description',
        'img',
        'price',
        'stock',
        'discount',
    ];
}
