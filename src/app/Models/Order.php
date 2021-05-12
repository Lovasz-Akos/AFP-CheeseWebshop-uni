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

    public $first_name;
    public $last_name;
    public $address;
    public $zip_code;
    public $city;
    public $country;
    public $complete;
    public $order_time;

    public function setFirstName($firstname)
    {
        $this->first_name = $firstname;
    }
    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($lastname)
    {
        $this->lirst_name = $lirstname;
    }
    public function getLirstName()
    {
        return $this->lirst_name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function setZipCode($zipcode)
    {
        $this->zip_code = $zipcode;
    }
    public function getZipCode()
    {
        return $this->zip_code;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }
    public function getCity()
    {
        return $this->city;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }
    public function getCountry()
    {
        return $this->country;
    }

    public function setComplete($complete)
    {
        $this->complete = $complete;
    }
    public function getComplete()
    {
        return $this->complete;
    }

    public function setOrderTime($ordertime)
    {
        $this->order_time = $ordertime;
    }
    public function getOrderTime()
    {
        return $this->order_time;
    }

    
}
