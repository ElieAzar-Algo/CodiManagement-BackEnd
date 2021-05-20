<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeysTargetValidator extends FormRequest
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
            'stage_id'=>"required|numeric|unique:keys_targets",
            'target'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'stage_id.required'=>"Choosing a stage is required",
            'stage_id.numeric'=>"Stage ID should be a number",
            'stage_id.unique'=>"Stage's target already exist",
            'target.required'=>'Target is required',
            'target.numeric'=>'Target should be a number',
        ];
    }
}
