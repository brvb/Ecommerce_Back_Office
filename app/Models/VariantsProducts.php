<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantsProducts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'reference',
        'barcode',
        'color',
        'size',
        'weight',
        'stock',
        'price',
        'sale',
    ];
}
