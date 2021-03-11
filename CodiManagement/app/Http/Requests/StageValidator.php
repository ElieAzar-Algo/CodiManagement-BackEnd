<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StageValidator extends FormRequest
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
        'prairie'=>'required',
        'cohort_code'=>'required|numeric',
        'stage_name'=>'required',
        'start_date'=>'required|date',
        'end_date'=>'required|date|after:start_date',
        'active_inactive'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'prairie.required' => 'Choosing if the stage is prairie or not is required',
            'cohort_code.required' => 'Choosing a Cohort Code is required',
            'stage_name.required' => 'Stage name is required',
            'start_date.required' => 'Start date is required',
            'end_date.required' => 'End Date is required',
            'active_inactive.required' => 'Choosing if this stage is active or not is required',

            'start_date.date' => 'Start date should be a date',
            'end_date.date' => 'End Date should be a date',
            'end_date.after:start_date' => 'End Date should be after the start date',
        ];
    }
}
