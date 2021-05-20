<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidator extends FormRequest
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
                'cohort_code'=>'required',
                'user_first_name'=>'required', 
                'user_last_name'=>'required', 
                'email'=>'required|email|unique:users', 
                'password'=>'required', 
                'user_phone_number'=>'required|numeric', 
                'user_emergency_number', 
                'user_birth_date'=>'required|date', 
                'user_nationality'=>'required', 
                'user_gender'=>'required',
                'user_city'=>'required',
                'user_address'=>'required',
                'user_avatar'=>'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'user_discord_id'=>'required',
                'user_security_level',
                'active_inactive'=>'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            
            'cohort_code.required' => 'Choosing a cohort is required',
            'user_first_name.required' => 'First Name is required',
            'user_last_name.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'user_phone_number.required' => 'Phone Number is required',
            'user_birth_date.required' => 'Date of birth is required',
            'user_nationality.required' => 'Nationality is required',
            'user_gender.required' => 'Gender is required',
            'user_city.required' => 'City is required',
            'user_address.required' => 'Address is required',
            'user_discord_id.required' => 'Discord ID is required',
            'active_inactive.required' => 'If Active or Alumni is required',
            
            'email.email' => 'Email should be example@mail.com',
            'email.unique' => 'This Email already exist ',
            'user_phone_number.numeric' => 'Phone number should be only numbers',
            'active_inactive.numeric' => 'Active Inactive should be only 0 or 1',
            'user_birth_date.date' => 'Date of birth should be a date',
            
        ];
   }
}
