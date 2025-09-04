<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Разрешаем всем авторизованным
    }

    public function rules()
    {
        // Получаем пользователя, которого обновляем (из route-model binding)
        $userId = $this->route('user')->id;

        return [
            'name'     => 'required|string|max:255',
            'email'    => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($userId)],
            'role'     => 'required|string',
            'password' => ['nullable', 'confirmed', 'min:8'],
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
