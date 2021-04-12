<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryDestroyRequest extends FormRequest
{
    public function authorize()
    {
        //return Auth::user()->permission > 1; //User - 1, Supervisor - 2, Admin - 3
        return true;
    }

    public function rules()
    {
        return [];
    }
}
