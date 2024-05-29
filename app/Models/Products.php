<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'reference',
        'product_name',
        'image_name',
        'image_file',
        'Description',
        'idcategory',
        'barcode',
        'price',
        'stock',
        'group_promotion',
        'sale',
        'location',
        'status',
        'colection',
        'promotion',
        'created_at',
        'updated_at',
    ];
}
