@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить индикатор</h1>

        <form action="{{ route('admin.indicators.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="goal_id" class="form-label">Цель</label>
                <select name="goal_id" class="form-control" required>
                    @foreach($goals as $goal)
                        <option value="{{ $goal->id }}">{{ $goal->id }} {{ $goal->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Название (RU)</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Название (KZ)</label>
                <input type="text" name="title_kk" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Название (EN)</label>
                <input type="text" name="title_en" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Статус</label>
                <select name="status" class="form-control">
                    <option value="">Не задан</option>
                    <option value="good">Улучшение</option>
                    <option value="bad">Ухудшение</option>
                    <option value="neutral">Без изменений</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Значение</label>
                <input type="number" step="0.01" name="value" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Единица измерения (RU)</label>
                <input type="text" name="unit" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Единица измерения (KZ)</label>
                <input type="text" name="unit_kk" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Единица измерения (EN)</label>
                <input type="text" name="unit_en" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Ссылка</label>
                <input type="url" name="url" class="form-control">
            </div>

            <button class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
