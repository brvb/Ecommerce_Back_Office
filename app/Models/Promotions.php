<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotions extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'title', 'image_banner', 'image_card', 'description','related_products','group_promotion', 'sale','status','start_date','end_date','created_at','updated_at',
    ];
}