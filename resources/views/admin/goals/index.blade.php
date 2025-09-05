@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Цели</h1>
        <a href="{{ route('admin.goals.create') }}" class="btn btn-primary mb-3">Добавить цель</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Код</th>
                <th>Название</th>
                <th>Цвет</th>
                <th>Ссылка</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($goals as $goal)
                <tr>
                    <td>{{ $goal->id }}</td>
                    <td>{{ $goal->code }}</td>
                    <td>{{ $goal->title }}</td>
                    <td>
                        <div style="width:30px; height:20px; background: {{ $goal->color ?? '#ccc' }}"></div>
                    </td>
                    <td>
                        @if($goal->url)
                            <a href="{{ $goal->url }}" target="_blank">Перейти</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.goals.edit', $goal) }}" class="btn btn-sm btn-warning">Редактировать</a>
                        <form action="{{ route('admin.goals.destroy', $goal) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Удалить цель?')">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
