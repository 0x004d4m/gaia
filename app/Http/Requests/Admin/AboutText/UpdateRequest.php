<?php

namespace App\Http\Requests\Admin\AboutText;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check() && backpack_user()->can('Manage Home');
    }

    public function rules()
    {
        return [
            'language_id' => 'required',
            'text' => 'required',
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
