<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreformValidation extends FormRequest
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
            'name'=>'required|string|max:25',
            'email'=>'required|email|',
            'phone'=>'required|numeric|',
            'address'=>'required|string|max:30',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required|numeric',
            'password'=>'required|min:6',    
        ];
    }
    public function messages()
    { 
        return[
                'name.required'=>'your name is required',
                'name.max'=>'name has not more than 20 characters', 

        ];
        
    }
}
