<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersTasksValidator extends FormRequest
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
            'task_id'=>'required',
            'user_id'=>'required',
            'admin_id'=>'required',
            'progress'=>'numeric|nullable',
            'keys'=>'numeric|nullable',
            'assignment_link'=>'required',
            
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'Choosing a student is required',
            'admin_id.required' => 'Choosing a mentor Code is required',
            'keys.numeric' => 'Key should be a number',
            'assignment_link.required' => ' Assignment link is required',

            
        ];
    }
}
