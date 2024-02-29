<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'address' => 'required|string',
            'age' => 'required|integer',
            'gender' => 'required|integer',
            'patronymic' => 'string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо',
            'surname.required' => 'Это поле необходимо',
            'address.required' => 'Это поле необходимо',
            'age.required' => 'Это поле необходимо',
            'gender.required' => 'Это поле необходимо',
            'email.required' => 'Это поле необходимо',
            'email.unique' => 'Такой пользователь уже есть',
            'password.required' => 'Это поле необходимо',
            'password.confirmed' => 'Пароли не совпадают'
        ];
    }
}
