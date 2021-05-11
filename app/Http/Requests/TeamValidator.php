<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamValidator extends FormRequest
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
            'stage_id'=>'required|numeric',
            'admin_id'=>'required|numeric',
            'name'=>'required',
            'max_members',
        ];
    }

    public function messages()
    {
        return [
            'stage_id.required'=>'Choosing a stage is required',
            'stage_id.numeric'=>'Stage ID should be a number',

            'admin_id.numeric'=>'Admin ID should be a number',
            'admin_id.required'=>'Choosing an admin is required',

            'name.required'=>'name is required',

            // 'max_members.required'=>'Max members is required',
            // 'max_members.numeric'=>'Max members should be a number',

        ];
    }
}
