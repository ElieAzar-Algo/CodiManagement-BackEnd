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
            'cohort_id'=>"required|numeric|unique:keys_targets",
            'target'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'cohort_id.required'=>"Choosing a cohort is required",
            'cohort_id.numeric'=>"Cohort ID should be a number",
            'cohort_id.unique'=>"Cohort's target already exist",
            'target.required'=>'Target is required',
            'target.numeric'=>'Target should be a number',
        ];
    }
}
