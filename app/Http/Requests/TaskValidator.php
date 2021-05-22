<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskValidator extends FormRequest
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
            'stage_id',
            'task_name'=>'required',
            'task_link'=>'nullable',
            'task_type',
            'is_teamwork'=>'required',

            'key_range'=>'numeric|nullable',
            'start_date'=>'required|date',
            'end_date'=>'required|date|after_or_equal:start_date',
            ];
    }

    public function messages()
    {
        return [
            'task_name.required' => 'Task Name is required',
            'start_date.required' => 'start date is required',
            'end_date.required' => 'end date is required',
            'is_teamwork.required' => 'Choosing if it is a Teamwork is required',

            'key_range.numeric' => 'Key amount should be a number',
            'start_date.date' => 'Start date should be a date',
            'end_date.date' => 'End Date should be a date',
            'end_date.after:start_date' => 'End Date should be after the start date',
        ];
    }
}
