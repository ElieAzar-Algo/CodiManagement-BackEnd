<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Attendancevalidator extends FormRequest
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
           'attendance_date'=>'unique:attendances'
            ];
    }

    public function messages()
    {
        return [
        'attendance_date.unique'=>'Attendance day already has been created! please search for it by date'
        ];
    }
}
