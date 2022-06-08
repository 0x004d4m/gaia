<?php

namespace App\Http\Requests\Admin\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check() && backpack_user()->can('Manage Gallery');
    }

    public function rules()
    {
        return [
            'image' => 'required',
        ];
    }

    public function attributes()
    {
        return [

        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
