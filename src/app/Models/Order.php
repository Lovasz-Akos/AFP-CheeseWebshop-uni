<?php

namespace App\Models;

use App\Traits\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, ApiResource;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'zip_code',
        'city',
        'country',
        'complete',
        'order_time'
    ];

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot(['amount']);
    }
    
}
