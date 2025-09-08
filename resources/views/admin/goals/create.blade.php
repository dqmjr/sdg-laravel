@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить цель</h1>

        <form action="{{ route('admin.goals.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Код</label>
                <input type="text" name="code" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Название</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Цвет</label>
                <input type="color" name="color" class="form-control">
            </div>

            <button class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
