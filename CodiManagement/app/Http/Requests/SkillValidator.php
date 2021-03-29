<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillValidator extends FormRequest
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
            'name'=>'required',
            'skill_family'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'name is required',
            'skill_family.required'=>' skill family is required',
        ];
    }
}
