<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CohortValidator extends FormRequest
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
        'branch_id'=>'required|numeric',
        'cohort_code'=>'required|numeric',
        'start_date'=>'required|date',
        'end_date'=>'required|date|after:start_date',
        ];
    }

    public function messages()
    {
        return [
            'branch_id.required' => 'Choosing a branch is required',
            'cohort_code.required' => 'Choosing a Cohort Code is required',
            'start_date.required' => 'Start date is required',
            'end_date.required' => 'End Date is required',

            'start_date.required' => 'Start date should be a date',
            'end_date.required' => 'End Date should be a date',
            'end_date.after:start_date' => 'End Date should be after the start date',
        ];
    }
}