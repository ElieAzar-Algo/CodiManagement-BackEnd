<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminValidator extends FormRequest
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

               'role_id'=>'required|numeric',
               'branch_id'=>'required|numeric',
                'full_name'=>'required', 
                'username'=>'required', 
                'email'=>'required|email|unique:users', 
                'password'=>'required', 
                'description'=>'required', 
                'active_inactive', 
                
        ];
    }
    public function  messages()
    {
        return [

            'role_id.required' => 'Choosing a role is required',
            'branch_id.required' => 'Choosing a branch is required',
            'full_name.required' => 'Full Name is required',
            'username.required' => 'username is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'description.required'=>'Description is required',
            
            'email.email' => 'Email should be example@mail.com',
            'email.unique' => 'This Email already exist ',
        ];
    }
}
