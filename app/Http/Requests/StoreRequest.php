<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required'],
            'subtitle' => ['nullable'],
            'description' => ['required'],
            'image' => ['nullable'],
        ];
    }

     public function messages()
    {
       return [
            'title.required' => 'Tilt must be filled'
        ];
    }
}
