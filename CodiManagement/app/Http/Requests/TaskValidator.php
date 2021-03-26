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
            'key_range'=>'numeric|nullable',
            
            ];
    }

    public function messages()
    {
        return [
            'task_name.required' => 'Task Name is required',
            'key_range.numeric' => 'Key amount should be a number',
        ];
    }
}
