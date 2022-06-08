<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GeneralRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
        // && backpack_user()->can('Manage Home')
    }

    public function rules()
    {
        return [
            '*' => 'required'
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
