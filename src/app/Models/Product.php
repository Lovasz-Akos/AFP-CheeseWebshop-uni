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
        'short_description'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }



    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }


    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function setInStock($instock)
    {
        $this->in_stock = $instock;
    }
    public function getInStock()
    {
        return $this->in_stock;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }


    public function setShortDescription($shortdescription)
    {
        $this->short_description = $shortdescription;
    }
    public function getShortDescription()
    {
        return $this->short_description;
    }


}
