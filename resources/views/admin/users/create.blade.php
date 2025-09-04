@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Добавить пользователя</h2>

        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Подтверждение пароля</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Роль</label>
                <select id="role" name="role" class="form-control @error('role') is-invalid @enderror" required>
                    <option value="">Выберите роль</option>
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Пользователь</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Админ</option>
                </select>
                @error('role')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="mt-2 btn btn-success">Сохранить</button>
        </form>
        <button class="mt-2 btn btn-secondary"><a class="text-white text-decoration-none    " href="{{ route('admin.users.index') }}">Выйти</a></button>

    </div>
@endsection
