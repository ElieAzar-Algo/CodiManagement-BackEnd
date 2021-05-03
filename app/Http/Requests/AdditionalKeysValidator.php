<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdditionalKeysValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'=>'nullable',
            'keys'=>'required|numeric',
            'description'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'keys.required'=>'key amount is required',
            'keys.numeric'=>'key amount should be a number',
            'description'=>'description is required'
        ];
    }
}
