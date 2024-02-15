<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTagRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->hasRole('admin');
    }

    
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
}
