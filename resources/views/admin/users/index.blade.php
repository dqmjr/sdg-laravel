@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Пользователи</h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">Добавить пользователя</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Роль</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning">Редактировать</a>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Удалить пользователя?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
@endsection
