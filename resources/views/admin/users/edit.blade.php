@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Редактировать пользователя</h2>

        <form method="POST" action="{{ route('admin.users.update', $user) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Имя</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Роль</label>
                <select name="role" class="form-control" required>
                    <option value="user" @selected($user->role === 'user')>Пользователь</option>
                    <option value="admin" @selected($user->role === 'admin')>Админ</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Новый пароль</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control @error('password') is-invalid @enderror"
                >
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>  <!-- вывод ошибки для password -->
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Подтвердить новый пароль</label>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                >
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>  <!-- вывод ошибки для password_confirmation -->
                </span>
                @enderror
            </div>


            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <button class="btn btn-primary">Сохранить</button>
        </form>


        <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="mt-3"
              onsubmit="return confirm('Удалить пользователя?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Удалить пользователя</button>

        </form>

        <button class="mt-3 btn btn-secondary"><a class="text-white text-decoration-none    " href="{{ route('admin.users.index') }}">Выйти</a></button>
    </div>
@endsection
