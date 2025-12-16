<header class="header">
    <div class="container">
        <div class="header__content">
            <div class="header__logo">
                <a href="{{url('/')}}"><img src="{{ asset('/img/logo.svg') }}" alt="logo"/></a>
            </div>

            <ul class="header__main-menu">
                <li>
                    <a href="{{ route('publications', ['locale' => $currentLang]) }}">{!! __('messages.publications') !!}</a>
                </li>
                <li>
                    <a href="{{ route('millennium-development-goals', ['locale' => $currentLang]) }}">{!! __('messages.millennium_development_goals') !!}</a>
                </li>
                <li>
                    <a href="{{ route('events-activities', ['locale' => $currentLang]) }}">{!! __('messages.events_activities') !!}</a>
                </li>
                <li>
                    <a href="{{ route('useful-resources', ['locale' => $currentLang]) }}">{!! __('messages.useful_resources') !!}</a>
                </li>
                <li><a href="{{ route('contacts', ['locale' => $currentLang]) }}">{!! __('messages.contacts') !!}</a>
                </li>
            </ul>


            <div class="header__admin-link" style="display: flex">
                @guest
                    @if (Route::has('login'))

                    @endif
                @else
                    <a href="{{ route('admin.goals.index') }}" class="download-btn"
                       style="margin-right: 10px; padding: 8px 10px; border-radius: 8px; font-size: 16px;line-height: 150%; display: flex;align-items: center">
                        {!! __('messages.admin_panel') !!}
                    </a>

                    <a class="download-btn" data-lang="kk"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        if (confirm('Вы действительно хотите выйти?')) {
                            document.getElementById('logout-form').submit();
                        }">
                        {!! __('messages.logout') !!}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest

                @php
                    $currentLang = auth()->check() ? auth()->user()->language ?? session('locale', 'ru') : session('locale', 'ru');

                    $languages = [
                        'ru' => 'RU',
                        'kk' => 'QZ',
                        'en' => 'ENG',
                    ];
                @endphp
                <div class="header__language">
                    <div class="header__languages">
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
                                        <a href="#" class="language-option" data-lang="{{ $langCode }}">
                                            <span class="language-name">{{ $langName }}</span>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.querySelectorAll('.language-option').forEach(el => {
                        el.addEventListener('click', function (e) {
                            e.preventDefault();
                            const lang = this.dataset.lang;

                            fetch('{{ route('user.locale') }}', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({user_locale: lang})
                            }).then(() => {
                                location.reload();
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</header>
