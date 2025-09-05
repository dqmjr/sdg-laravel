<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ панель</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px 10px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 6px;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h4>Админка</h4>
    <a href="{{ route('admin.goals.index') }}">🎯 Цели</a>
    <a href="{{ route('admin.indicators.index') }}">📊 Индикаторы</a>
    @guest
        @if (Route::has('login'))

        @endif
    @else

        @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.users.index') }}">
                Пользователи
            </a>
        @endif

        <a data-lang="kk" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="language-name">{{ __('Выйти') }}</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endguest
</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>
