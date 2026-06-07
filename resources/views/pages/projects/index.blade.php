@extends('layouts.app')

@section('content')

<section class="relative pt-28 pb-20 sm:pt-36 sm:pb-28 bg-surface min-h-screen overflow-hidden">

    {{-- Mesh background --}}
    <div class="mesh-bg">
        <div class="mesh-bg-blob"></div>
        <div class="mesh-bg-blob"></div>
        <div class="mesh-bg-blob"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        {{-- HERO HEADER --}}
        <div class="text-center mb-12 sm:mb-16 reveal visible">
            <p class="text-indigo-400 text-xs sm:text-sm tracking-[0.2em] font-medium mb-3">
                {{ __('projects_index.section_label') }}
            </p>
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold text-white mb-4 leading-tight">
                {{ __('projects_index.heading_start') }}
                <span class="bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 text-transparent bg-clip-text">
                    {{ __('projects_index.heading_end') }}
                </span>
            </h1>
            <p class="text-gray-400 text-sm sm:text-base max-w-xl mx-auto">
                {{ __('projects_index.subtitle') }}
            </p>
            <div class="w-16 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full mx-auto mt-6"></div>
        </div>

        {{-- FILTER BAR --}}
        <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-10 sm:mb-12 reveal reveal-delay-1">
            <button data-filter="all"
                class="filter-btn px-5 py-2 rounded-full text-xs sm:text-sm font-medium transition-all duration-300
                       bg-indigo-500 text-white shadow-lg shadow-indigo-500/25">
                {{ __('projects_index.filter_all') }}
            </button>
            @foreach ($allTech as $tech)
            <button data-filter="{{ Str::slug($tech) }}"
                class="filter-btn px-5 py-2 rounded-full text-xs sm:text-sm font-medium transition-all duration-300
                       bg-white/[0.04] text-gray-400 border border-white/10
                       hover:bg-white/10 hover:text-white hover:border-white/20">
                {{ $tech }}
            </button>
            @endforeach
        </div>

        {{-- PROJECTS COUNT --}}
        <p class="text-center text-gray-600 text-xs sm:text-sm mb-6 reveal reveal-delay-2">
            <span class="text-indigo-400 font-medium">{{ count($projects) }}</span> {{ __('projects_index.found') }}
        </p>

        {{-- GRID --}}
        <div id="projects-grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 stagger-grid">

            @foreach ($projects as $index => $project)
            <a href="{{ route('projects.show', $project['slug']) }}"
               class="project-card group bg-[#0f172a]/70 backdrop-blur-sm rounded-2xl overflow-hidden block
                      border border-white/[0.06] filter-item visible-card"
               data-tech="{{ Str::slug(implode(' ', $project['tech'])) }}">

                <div class="project-card-glow"></div>

                <div class="card-image-wrapper">
                    <img src="{{ asset('images/projects/' . $project['image']) }}"
                         onerror="this.style.display='none'; this.parentElement.classList.add('flex','items-center','justify-center','h-40','sm:h-48'); this.parentElement.innerHTML='<span class=\'text-indigo-400 text-base sm:text-lg font-semibold\'>{{ $project['title'] }}</span>'"
                         class="w-full h-40 sm:h-48 object-cover transition duration-500 group-hover:scale-105"
                         alt="{{ $project['title'] }}">

                    <div class="absolute top-3 left-3 z-10">
                        <span class="text-[10px] font-mono text-white/40 bg-black/30 backdrop-blur-sm px-2 py-0.5 rounded-full border border-white/10">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                    </div>

                    <span class="view-project-badge">
                        {{ __('projects_index.details') }} &rarr;
                    </span>
                </div>

                <div class="p-5 sm:p-6 relative z-10">
                    <div class="flex items-center gap-2 mb-2">
                        @if (count($project['collaborators']) > 0)
                        <span class="text-[10px] text-indigo-400 bg-indigo-500/10 border border-indigo-500/20 px-2.5 py-0.5 rounded-full">
                            <i class="fa-solid fa-users mr-1"></i>{{ __('projects_index.team') }}
                        </span>
                        @else
                        <span class="text-[10px] text-gray-500 bg-gray-500/10 border border-gray-500/20 px-2.5 py-0.5 rounded-full">
                            <i class="fa-solid fa-user mr-1"></i>{{ __('projects_index.solo') }}
                        </span>
                        @endif
                    </div>

                    <h3 class="text-base sm:text-lg font-semibold text-white mb-2 group-hover:text-indigo-400 transition-colors">
                        {{ $project['title'] }}
                    </h3>

                    <p class="text-xs sm:text-sm text-gray-400 mb-4 leading-relaxed line-clamp-2">
                        {{ $project['short_desc'] }}
                    </p>

                    <div class="flex flex-wrap gap-1.5 sm:gap-2">
                        @foreach ($project['tech'] as $tech)
                            @php
                                $colorMap = [
                                    'Laravel' => ['bg' => 'bg-orange-500/10', 'text' => 'text-orange-400', 'border' => 'border-orange-500/20'],
                                    'Tailwind' => ['bg' => 'bg-sky-500/10', 'text' => 'text-sky-400', 'border' => 'border-sky-500/20'],
                                    'MySQL' => ['bg' => 'bg-blue-500/10', 'text' => 'text-blue-400', 'border' => 'border-blue-500/20'],
                                    'Midtrans' => ['bg' => 'bg-purple-500/10', 'text' => 'text-purple-400', 'border' => 'border-purple-500/20'],
                                    'Flutter' => ['bg' => 'bg-sky-500/10', 'text' => 'text-sky-400', 'border' => 'border-sky-500/20'],
                                    'Dart' => ['bg' => 'bg-blue-500/10', 'text' => 'text-blue-400', 'border' => 'border-blue-500/20'],
                                    'API' => ['bg' => 'bg-indigo-500/10', 'text' => 'text-indigo-400', 'border' => 'border-indigo-500/20'],
                                    'Blade' => ['bg' => 'bg-rose-500/10', 'text' => 'text-rose-400', 'border' => 'border-rose-500/20'],
                                ];
                                $c = $colorMap[$tech] ?? ['bg' => 'bg-gray-500/10', 'text' => 'text-gray-400', 'border' => 'border-gray-500/20'];
                            @endphp
                            <span class="text-[10px] sm:text-xs px-2.5 py-1 rounded-full border transition hover:shadow-lg
                                         {{ $c['bg'] }} {{ $c['text'] }} {{ $c['border'] }}">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>

            </a>
            @endforeach

        </div>

        {{-- BACK --}}
        <div class="text-center mt-14 reveal">
            <a href="{{ route('home') }}"
               class="inline-flex items-center gap-2 text-gray-500 hover:text-white text-sm transition group">
                <span class="group-hover:-translate-x-1 transition">&larr;</span>
                {{ __('projects_index.back_home') }}
            </a>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.filter-btn');
    const grid = document.getElementById('projects-grid');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {

            buttons.forEach(b => {
                b.classList.remove('bg-indigo-500', 'text-white', 'shadow-lg', 'shadow-indigo-500/25');
                b.classList.add('bg-white/[0.04]', 'text-gray-400', 'border', 'border-white/10');
            });
            btn.classList.add('bg-indigo-500', 'text-white', 'shadow-lg', 'shadow-indigo-500/25');
            btn.classList.remove('bg-white/[0.04]', 'text-gray-400', 'border', 'border-white/10');

            const filter = btn.dataset.filter;
            const cards = grid.querySelectorAll('.filter-item');

            cards.forEach((card, i) => {
                const techs = card.dataset.tech || '';
                const match = filter === 'all' || techs.includes(filter);

                if (match) {
                    card.classList.remove('hidden-card');
                    card.classList.add('visible-card');
                    card.style.animationDelay = `${i * 0.06}s`;
                    card.style.animation = 'none';
                    requestAnimationFrame(() => {
                        card.style.animation = `fadeInUp 0.5s ease forwards`;
                    });
                } else {
                    card.classList.remove('visible-card');
                    card.classList.add('hidden-card');
                }
            });
        });
    });
});
</script>

@endsection
