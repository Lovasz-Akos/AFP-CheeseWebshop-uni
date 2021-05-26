
<?php

namespace App\Http\Requests;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        //return Auth::user()->permission > 1; //User - 1, Supervisor - 2, Admin - 3
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:2',
                Rule::unique('products', 'name')->ignore($this->product?->id ?? '0')
            ],
            'brand' => ['required'],
            'price' => ['required', 'numeric', 'min:100'],
            'in_stock' => ['numeric'],
            'description' => ['required'],
            'short_description' => ['required'],
            'category_id' => ['required_without:category', 'exists:categories,id'],
            'category' => ['required_without:category', 'exists:categories,name'],
            'image' => ['file', 'mimes:jpg,bmp,png,gif,tiff,jfif', 'max:15360'], //15MB
        ];
    }
}