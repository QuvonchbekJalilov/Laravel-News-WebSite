<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->can('category:update') || auth()->user()->hasRole('admin');
    }

    
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
}
