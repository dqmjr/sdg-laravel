@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать индикатор</h1>

        <form action="{{ route('admin.indicators.update', $indicator) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="goal_id" class="form-label">Цель</label>
                <select name="goal_id" class="form-control" required>
                    @foreach($goals as $goal)
                        <option value="{{ $goal->id }}" @if($goal->id == $indicator->goal_id) selected @endif>
                            {{ $goal->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Название</label>
                <input type="text" name="title" value="{{ $indicator->title }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Статус</label>
                <select name="status" class="form-control">
                    <option value="">Не задан</option>
                    <option value="good" @if($indicator->status == 'good') selected @endif>Улучшение</option>
                    <option value="bad" @if($indicator->status == 'bad') selected @endif>Ухудшение</option>
                    <option value="neutral" @if($indicator->status == 'neutral') selected @endif>Без изменений</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Значение</label>
                <input type="number" step="0.01" name="value" value="{{ $indicator->value }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Ссылка</label>
                <input type="url" name="url" value="{{ $indicator->url }}" class="form-control">
            </div>

            <button class="btn btn-primary">Сохранить</button>

            <a href="{{route('admin.indicators.index')}}" class="btn btn-secondary">Отмена</a>

        </form>
    </div>
@endsection
