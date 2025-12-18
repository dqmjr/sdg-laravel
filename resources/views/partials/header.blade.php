<header class="header">
    <div class="container">
        <div class="header__content">

            @php
                $currentLang = session('locale', 'kk');
                $menuItems = [
                    'publications' => __('messages.publications'),
                    'millennium-development-goals' => __('messages.millennium_development_goals'),
                    'events-activities' => __('messages.events_activities'),
                    'useful-resources' => __('messages.useful_resources'),
                    'contacts' => __('messages.contacts')
                ];
                $languages = ['kk' => 'QZ', 'ru' => 'RU', 'en' => 'ENG'];
                $segments = request()->segments();
            @endphp
            <div class="header__burger-logo">
                <div class="header__burger" id="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="header__logo">
                <a href="{{ $currentLang === 'kk' ? url('/') : url("/$currentLang") }}">
                    <img src="{{ asset('/img/logo.svg') }}" alt="logo"/>
                </a>
            </div>


            <nav class="header__nav" id="navMenu">
                <ul class="header__main-menu">
                    @foreach($menuItems as $routeName => $label)
                        @php
                            $newSegments = $segments;
                            $newSegments[0] = $currentLang;
                            $url = url(implode('/', array_merge([$currentLang], [$routeName])));
                        @endphp
                        <li>
                            <a href="{{ url($currentLang === 'kk' ? "/$routeName" : "/$currentLang/$routeName") }}">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <!-- Админ / авторизация -->
                <div class="header__admin-link">
                    @guest
                    @else
                        <a href="{{ route('admin.goals.index') }}" class="download-btn">
                            {!! __('messages.admin_panel') !!}
                        </a>

                        <a class="download-btn" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    if(confirm('Вы действительно хотите выйти?')) {
                                        document.getElementById('logout-form').submit();
                                    }">
                            {!! __('messages.logout') !!}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest

                    <!-- Переключатель языков -->
                    <div class="header__language">
                        <div class="language-switcher">
                            <div class="language-current">
                                <span class="language-name">{{ $languages[$currentLang] }}</span>
                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L13 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="language-dropdown">
                                @foreach($languages as $langCode => $langName)
                                    @if($langCode != $currentLang)
                                        @php
                                            $newSegments = $segments;
                                            $newSegments[0] = $langCode;
                                            $url = url(implode('/', $newSegments));
                                        @endphp
                                        <a href="{{ $url }}">{{ $langName }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <script>
        const burger = document.getElementById('burger');
        const navMenu = document.getElementById('navMenu');

        burger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>
</header>
