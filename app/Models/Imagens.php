<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'reference_product',
        'barcode_variants',
        'imagem_file',
    ];
}
