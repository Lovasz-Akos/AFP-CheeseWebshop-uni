<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'price',
        'in_stock',
        'image',
        'description',
        'short_description'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
