<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected  $fillable = [
        'cat_id',
        'name',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        'qtx',
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];
}
