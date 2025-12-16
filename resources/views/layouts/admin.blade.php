<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ панель</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>
</head>

<body>
<div class="admin-sidebar">
    @auth
    <div class="sidebar">
        <a class="navbar-brand mb-4" href="{{ url('/') }}">
            <div class="header__logo">
                <img src="{{ asset('/img/logo.svg') }}" alt="logo"/>
            </div>
        </a>
        <a href="{{ route('admin.goals.index') }}">Цели</a>
        <a href="{{ route('admin.indicators.index') }}">Индикаторы</a>
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
               onclick="event.preventDefault();
                        if (confirm('Вы действительно хотите выйти?')) {
                            document.getElementById('logout-form').submit();
                        }">
                {{ __('Выйти') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest
    </div>
    @endauth
    <div class="content">
        @yield('content')
    </div>

</div>
</body>
</html>
