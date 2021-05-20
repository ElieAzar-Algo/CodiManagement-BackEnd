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
            'user_id'=>'required|numeric',
            'stage_id'=>'required|numeric',
            'key'=>'required|numeric',
            'description'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required'=>'Choosing a student is required',
            'user_id.numeric'=>'Student ID should be a number',
            'stage_id.required'=>'Choosing a stage is required',
            'stage_id.numeric'=>'Stage ID should be a number',
            
            'key.required'=>'key amount is required',
            'key.numeric'=>'key amount should be a number',
            'description'=>'description is required'
        ];
    }
}
