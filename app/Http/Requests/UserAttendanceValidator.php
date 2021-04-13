<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAttendanceValidator extends FormRequest
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
        'user_id',
        'attendance_id'=>'required',
        'present_absent'=>'required',
        'attendance_key_amount'=>'numeric|nullable',
        'verified_date',
        'comment',
        ];
    }

    public function messages()
    {
        return [
            'attendance_id.required' => 'Choosing an attendance date is required',
            
            'present_absent.required' => 'Attendance is required',
            'attendance_key_amount.numeric' => 'Key amount should be a number',
        ];
    }
}
