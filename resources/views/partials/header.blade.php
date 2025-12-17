<header class="header">
    <div class="container">
        <div class="header__content">
            @php
                $currentLang = auth()->check() ? auth()->user()->language ?? session('locale', 'kk') : session('locale', 'kk');
            @endphp
            <div class="header__logo">
                <a href="{{ $currentLang === 'kk' ? url('/') : url("/$currentLang") }}">
                    <img src="{{ asset('/img/logo.svg') }}" alt="logo"/>
                </a>
            </div>

            @php
                $menuItems = [
                    'publications' => __('messages.publications'),
                    'millennium-development-goals' => __('messages.millennium_development_goals'),
                    'events-activities' => __('messages.events_activities'),
                    'useful-resources' => __('messages.useful_resources'),
                    'contacts' => __('messages.contacts')
                ];
            @endphp

            <ul class="header__main-menu">
                @foreach($menuItems as $routeName => $label)
                    @php
                        $routeFull = $currentLang === 'kk' ? $routeName : $routeName . '.lang';
                        $routeParams = $currentLang !== 'kk' ? ['locale' => $currentLang] : [];
                    @endphp
                    <li>
                        <a href="{{ route($routeFull, $routeParams) }}">{{ $label }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="header__admin-link" style="display: flex">
                @guest
                @else
                    <a href="{{ route('admin.goals.index') }}" class="download-btn"
                       style="margin-right: 10px; padding: 8px 10px; border-radius: 8px; font-size: 16px;line-height: 150%; display: flex;align-items: center">
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

                @php
                    $languages = [
                        'kk' => 'QZ',
                        'ru' => 'RU',
                        'en' => 'ENG'
                    ];
                @endphp
                <div class="header__language">
                    <div class="language-switcher">
                        <div class="language-current">
                            <span class="language-name">{{ $languages[$currentLang] }}</span>
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L13 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="language-dropdown">
                            @foreach($languages as $langCode => $langName)
                                @if($langCode != $currentLang)
                                    <a href="#" class="language-option" data-lang="{{ $langCode }}" data-current-path="{{ request()->path() }}">
                                        {{ $langName }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <script>
                    document.querySelectorAll('.language-option').forEach(el => {
                        el.addEventListener('click', function(e){
                            e.preventDefault();
                            const lang = this.dataset.lang;
                            const currentPath = this.dataset.currentPath;

                            fetch('{{ route('user.locale') }}', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    user_locale: lang,
                                    current_path: currentPath
                                })
                            })
                                .then(res => res.json())
                                .then(data => {
                                    window.location.href = data.redirect;
                                });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</header>
