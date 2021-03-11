<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Branch extends FormRequest
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
        'branch_name'=>'required',
        'branch_country'=>'required',
        'branch_location'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'branch_name.required' => 'Branch name is required',
            'branch_country.required' => 'Country is required',
            'branch_location.required' => 'Location is required',
        ];
    }
}
