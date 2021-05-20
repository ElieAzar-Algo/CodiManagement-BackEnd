<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassKeyValidator extends FormRequest
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
            'cohort_id'=>'required|numeric',
            'stage_id'=>'required|numeric',
            'team'=>'required',
            'key'=>'required|numeric',
            'description'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'cohort_id.required'=>'Choosing a cohort is required',
            'cohort_id.numeric'=>'Cohort ID should be a number',
            'stage_id.required'=>'Choosing a stage is required',
            'stage_id.numeric'=>'Stage ID should be a number',

            'team.required'=>'Team or Class name is required',
            'key.required'=>'Keys amount is required',
            'key.numeric'=>'Keys amount should be a number',
            'description.required'=>'Description is required'
        ];
    }
}
