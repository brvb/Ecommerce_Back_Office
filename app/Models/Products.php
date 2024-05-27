<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'product_name',
        'image_name',
        'image_file',
        'Description',
        'idcategory',
        'price',
        'old_price',
        'weight',
        'stock',
        'sale',
        'created_at',
        'updated_at',
    ];
}
