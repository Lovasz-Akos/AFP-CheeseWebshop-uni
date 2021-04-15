<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        //return Auth::user()->permission > 1; //User - 1, Supervisor - 2, Admin - 3
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'unique:categories, name'],
        ];
    }
}