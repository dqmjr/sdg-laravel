@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Индикаторы</h1>
        <a href="{{ route('admin.indicators.create') }}" class="btn btn-primary mb-3">Добавить индикатор</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Цель</th>
                <th>Название</th>
                <th>Статус</th>
                <th>Значение</th>
                <th>Ссылка</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($indicators as $indicator)
                <tr>
                    <td>{{ $indicator->id }}</td>
                    <td>{{ $indicator->goal->title }}</td>
                    <td>{{ $indicator->title }}</td>
                    <td>{{ $indicator->status }}</td>
                    <td>{{ $indicator->value }}</td>
                    <td>
                        @if($indicator->url)
                            <a href="{{ $indicator->url }}" target="_blank">Перейти</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.indicators.edit', $indicator) }}" class="btn btn-sm btn-warning">Редактировать</a>
                        <form action="{{ route('admin.indicators.destroy', $indicator) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Удалить индикатор?')">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
