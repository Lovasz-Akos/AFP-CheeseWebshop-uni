<?php

namespace App\Models;

use App\Traits\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, ApiResource;

    protected $fillable = [
        'name',
        'brand',
        'price',
        'in_stock',
        'image',
        'description',
        'short_description',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
