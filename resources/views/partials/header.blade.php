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

    <style>
        .header__nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px
        }

        .header__burger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 5px;
        }

        .header__burger span {
            width: 25px;
            height: 2px;
            background: #fff;
        }

        .header__burger-logo {
            display: none;
            gap: 22px;
            align-items: center;
        }
        .header__burger-logo a {
            display: flex;
            align-items: center;
        }

        @media (max-width: 1200px) {
            .hero__content {
                z-index: 1!important;
            }
            .header__content:not(:last-child) {
                display: inline-flex!important;
                gap: 30px
            }

            .header__burger {
                border: 1px solid #fff;
                border-radius: 8px;
                padding: 10px;
            }

            .header__main-menu {
                display: none;
                flex-direction: column;
                gap: 10px;
                background: #fff;
                position: absolute;
                top: 70px;
                left: 22px;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 8px;
            }

            .header__main-menu a {
                color: #066f9f!important;
                text-shadow: none!important;
            }

            .page-inner .header__burger span {
                background: #066f9f!important;
            }

            .page-inner .header__burger {
                border: 1px solid #066f9f!important;
            }

            .header__burger {
                display: flex;
            }

            .header__burger-logo {
                display: flex;
            }

            .header__nav.active .header__main-menu,
            .header__nav.active .header__admin-link {
                display: flex;
            }
        }
    </style>

    <script>
        const burger = document.getElementById('burger');
        const navMenu = document.getElementById('navMenu');

        burger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>
</header>
