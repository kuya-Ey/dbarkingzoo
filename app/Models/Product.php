<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public $timestamps = false;

    protected $attributes = [
        'image' => 'public/images/noimagefound.jpg'
    ];

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'category',
        'images'
    ];
}
