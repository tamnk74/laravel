<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
            'password' => 'same:confirm-password',
            'avatar' => 'sometimes|nullable|mimes:jpeg,jpg,png,gif|max:10000',
            'full_name' => 'min:0|max:100',
            'address' => 'min:0|max:255',
            'birthday' => 'sometimes|nullable|date',
            'phone_number' => 'sometimes|nullable|regex:/^[0]{1}[19]{1}[0-9]{8,9}$/',
        ];
    }
}

