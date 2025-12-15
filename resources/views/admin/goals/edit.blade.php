@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать цель</h1>

        <form action="{{ route('admin.goals.update', $goal) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Код</label>
                <input type="text" name="code" value="{{ $goal->code }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Название (RU)</label>
                <input type="text" name="title" value="{{ $goal->title }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Название (KK)</label>
                <input type="text" name="title_kk" value="{{ $goal->title_kk }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Название (EN)</label>
                <input type="text" name="title_en" value="{{ $goal->title_en }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Цвет</label>
                <input type="color" name="color" value="{{ $goal->color }}" class="form-control">
            </div>

            <button class="btn btn-primary">Сохранить</button>
            <a href="{{ route('admin.goals.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
@endsection
