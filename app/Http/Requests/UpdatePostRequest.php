<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->can('post:update') || auth()->user()->hasRole('admin');
    }

    
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'photo' => 'image|max:2048',
        ];
    }
}
