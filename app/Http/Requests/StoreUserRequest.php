<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Разрешаем всем авторизованным
    }

    public function rules()
    {
        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role'     => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'password.min' => 'Пароль должен содержать минимум 8 символов',
            'password.confirmed' => 'Подтверждение пароля не совпадает',
        ];
    }
}
