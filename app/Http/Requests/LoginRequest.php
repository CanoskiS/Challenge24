<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => 'required|exists:users,name',
            'password' => 'required:min:8',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Корисничко име е задолжително!',
            'name.exists' => 'Корисничко име не постои!',
            'password.required' => 'Лозинка е задолжителна!',
            'password.min:8' => 'Лозинка е минимум 8 карактери!',
            
        ];
    }
}
