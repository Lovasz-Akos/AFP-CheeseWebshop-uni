<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return Auth::user()->permission > 2;    //ha a permission 2 v nagyobb akkor enged kategoriat tarolni
        return true;                              //barki tarolhat xd
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['require', 'min:3', 'unique:categories', 'name']
        ];
    }
}
