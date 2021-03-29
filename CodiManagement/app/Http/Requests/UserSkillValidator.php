<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSkillValidator extends FormRequest
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
            'skill_id'=>'required',
            'progress'=>'numeric|nullable',
        ];
    }
    public function messages()
    {
        return [
            'user_id.required'=>'Please Choose A Student First',
            'skill_id.required'=>' skill not found',
            'progress.numeric'=>' Progress must be a number',
        ];
    }
}
