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
                <label class="form-label">Название</label>
                <input type="text" name="title" value="{{ $goal->title }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Цвет</label>
                <input type="text" name="color" value="{{ $goal->color }}" class="form-control">
            </div>

            <button class="btn btn-success">Обновить</button>
        </form>
    </div>
@endsection
