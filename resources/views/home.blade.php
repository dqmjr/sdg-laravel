@extends('layouts.app')
@section('title', 'Sustainable development goals')
@section('content')

<main class="main">
    <section class="hero">
        <video
            poster="{{ asset('img/head-bg.png') }}"
            muted
            autoplay
            loop
            playsinline
            preload="auto"
            class="video-bg"
        >
            <source data-v-f94c853b="" src="{{ asset('/media/bg.mp4" type="video/mp4') }}">
            <source src="{{ asset('/media/bg.webm') }}" type="video/webm">
        </video>
        <div class="container">
            <div class="hero__content">
                <div class="hero-logo">
                    <img src="{{ asset('/img/main-title.svg') }}" alt="logo"/>
                </div>

                <div class="card-block">
                    @foreach($goals as $goal)
                        <a href="#" class="card-item" style="background: {{ $goal->color }};">

                            <div class="card-item--number">
                                {{ $goal->code }}
                            </div>

                            <div class="card-item--title">
                                @php
                                    $locale = app()->getLocale();
                                    $titleField = 'title_' . $locale;
                                @endphp
                                {{ $goal->$titleField ?? $goal->title }}
                            </div>

                            <div class="card-item--icon">
                                <img src="{{ asset('img/icon-' . $goal->id . '.svg') }}" alt=""/>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="links-section">
        <div class="container">
            <div class="links-content">
                <a href="https://economy.kz/ru/Celi_ustojchivogo_razvitija/About_TSUR/">
                    <div class="links-content__link">
                        {!! __('messages.about_implementation_sdg') !!}
                    </div>
                </a>
                <a href="https://sustainabledevelopment.un.org/">
                    <div class="links-content__link">
                        {!! __('messages.sdg_knowledge_platform') !!}
                    </div>
                </a>
                <a href="https://unstats.un.org/home/">
                    <div class="links-content__link">
                        {!! __('messages.statistics_division') !!}
                    </div>
                </a>
                <a href="https://www.unece.org/unece-and-the-sdgs/unece-and-the-sdgs.html">
                    <div class="links-content__link" style="white-space: nowrap">
                        {!! __('messages.unece_and_sdg') !!}
                    </div>
                </a>
                <a href="https://datatopics.worldbank.org/sdgs/index.html">
                    <div class="links-content__link">
                        {!! __('messages.world_development_indicators_sdg') !!}
                    </div>
                </a>
            </div>
            <a href=""></a>
        </div>
    </section>
    <section class="chart-section">
        <div class="container">
            <div class="chart-content">
                <h1 class="chart-title">{!! __('messages.review_sdg') !!}: <span>{!! __('messages.kazakhstan') !!}</span></h1>
                <h3 class="chart-instruction">{!! __('messages.click_on_columns') !!}</h3>
                <div class="chart-container">
                    <div class="chart-block-top">
                        <div class="chart-block-indecators">
                            <div class="chart-block-indecator-item">
                                <div class="tooltip-cube bad"></div>
                                <div class="chart-block-indecator-item-title">
                                    {!! __('messages.deterioration_of_indicator') !!}
                                </div>
                            </div>
                            <div class="chart-block-indecator-item">
                                <div class="tooltip-cube good"></div>
                                <div class="chart-block-indecator-item-title">
                                    {!! __('messages.improvement_of_indicator') !!}
                                </div>
                            </div>
                            <div class="chart-block-indecator-item">
                                <div class="tooltip-cube neutral"></div>
                                <div class="chart-block-indecator-item-title">
                                    {!! __('messages.no_changes') !!}
                                </div>
                            </div>
                        </div>
                        <div class="chart-block-years">
                            <div class="chart-block-year-item">
                                2014
                            </div>
                            <div class="chart-block-year-item">
                                2025
                            </div>
                        </div>
                    </div>
                    <div id="chart-block"></div>
                    <div id="tooltip" class="tooltip"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <h2 class="about-title">{!! __('messages.about_project') !!}</h2>
                <h3 class="about-subtitle">{!! __('messages.17_goals_transform_our_world') !!}</h3>

                <div class="sdg-dots">
                    <div class="dot" style="background-color: #ef384c;"></div>
                    <div class="dot" style="background-color: #e9b233;"></div>
                    <div class="dot" style="background-color: #10a348;"></div>
                    <div class="dot" style="background-color: #e42338;"></div>
                    <div class="dot" style="background-color: #f1523d;"></div>
                    <div class="dot" style="background-color: #26bde2;"></div>
                    <div class="dot" style="background-color: #ffaa00;"></div>
                    <div class="dot" style="background-color: #b81e4c;"></div>
                    <div class="dot" style="background-color: #f27439;"></div>
                    <div class="dot" style="background-color: #f02d79;"></div>
                    <div class="dot" style="background-color: #fb9c32;"></div>
                    <div class="dot" style="background-color: #cb942f;"></div>
                    <div class="dot" style="background-color: #0f804c;"></div>
                    <div class="dot" style="background-color: #1096d3;"></div>
                    <div class="dot" style="background-color: #2eb24d;"></div>
                    <div class="dot" style="background-color: #066f9f;"></div>
                    <div class="dot" style="background-color: #074b6e;"></div>
                </div>

                <div class="about-text">
                    <div class="about-text-conten">
                        <a href="">{!! __('messages.sdg') !!}</a>
                        {!! __('messages.sdg_represent_universal_appeal') !!}
                        <a href=""> {!! __('messages.2030_sustainable_development_agenda') !!}</a>
                    </div>
                </div>
                <div class="text-block">
                    <p>
                        {!! __('messages.monitor_review_implementation_process') !!}
                    </p>
                    <p>
                        {!! __('messages.order_facilitate_monitoring_progress') !!}
                    </p>
                    <p>
                        {!! __('messages.kazakhstan_nationalized_global_sdg_indicators') !!}
                    </p>
                    <p>
                        {!! __('messages.national_reporting_platform_sdg') !!}
                    </p>
                    <p>
                        {!! __('messages.state_statistics_bodies_ensure_equal_rights_users') !!}
                    </p>
                    <p>
                        {!! __('messages.users_have_right_simultaneous_equal_access') !!}
                    </p>
                    <p>
                        {!! __('messages.terms_official_statistical_information') !!}
                    </p>
                </div>
                <div class="download-section">
                    <a href="" class="download-btn">
                        {!! __('messages.download_all_data') !!}
                    </a>
                    <div class="file-info">
                        {!! __('messages.size_and_last_uploaded') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@php
    $locale = app()->getLocale();

    $chartData = $goals->map(function($goal) use ($locale) {
        $goalTitleField = 'title_' . $locale;
        return [
            'code'  => $goal->code,
            'title' => $goal->$goalTitleField ?? $goal->title, // берём перевод, если есть
            'color' => $goal->color,
            'data'  => $goal->indicators->map(function($indicator) use ($locale) {
                $indicatorTitleField = 'title_' . $locale;
                $indicatorUnitField = 'unit_' . $locale;
                return [
                    'title'  => $indicator->$indicatorTitleField ?? $indicator->title,
                    'status' => $indicator->status,
                    'value'  => $indicator->value,
                    'unit'   => $indicator->$indicatorUnitField ?? $indicator->unit,
                    'url'    => $indicator->url,
                ];
            })->toArray(),
        ];
    })->toArray();
@endphp

<script>
    const chartData = @json($chartData);
    window.chartData = chartData;
</script>

@endsection


