<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAbsenceRequestValidator extends FormRequest
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
        'user_id'=>'required',
        'absence_reason'=>'required',
        'absence_requested_date'=>'required|date',
        'absence_start_date'=>'required|date',
        'absence_end_date'=>'required|date|after:absence_start_date',
        'absence_approved'=>'required',
        ];
    }

    public function messages()
    {
        return [
            
            'absence_reason.required' => 'A reason is required',
            
            'absence_start_date.required' => 'Start date is required',
            'absence_end_date.required' => 'End Date is required',
           
            'absence_start_date.date' => 'Start date should be a date',
            'absence_end_date.date' => 'End Date should be a date',
            'absence_end_date.after' => 'End Date should be after the start date',
        ];
   }
}