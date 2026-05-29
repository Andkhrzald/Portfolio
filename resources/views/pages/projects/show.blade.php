@extends('layouts.app')

@section('content')

{{-- Reading Progress --}}
<div class="reading-progress" id="reading-progress">
    <div class="reading-progress-bar" id="reading-progress-bar"></div>
</div>

<section class="relative bg-[#0B0F1A] min-h-screen">

    {{-- HERO COVER --}}
    <div class="relative h-[50vh] sm:h-[60vh] md:h-[70vh] overflow-hidden bg-gradient-to-br from-indigo-900/40 via-purple-900/20 to-slate-900">
        <img src="{{ asset('images/projects/' . $project['image']) }}"
             onerror="this.style.display='none'"
             class="w-full h-full object-cover opacity-60"
             alt="{{ $project['title'] }}">

        <div class="absolute inset-0 bg-gradient-to-t from-[#0B0F1A] via-[#0B0F1A]/60 to-transparent"></div>

        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-10 md:p-16 max-w-5xl mx-auto">
            <div class="flex flex-wrap items-center gap-3 mb-3 reveal visible">
                @if (count($project['collaborators']) > 0)
                <span class="text-[11px] text-indigo-300 bg-indigo-500/15 border border-indigo-500/25 px-3 py-1 rounded-full backdrop-blur-sm">
                    <i class="fa-solid fa-users mr-1"></i> {{ __('projects_show.team_badge') }}
                </span>
                @else
                <span class="text-[11px] text-gray-400 bg-gray-500/15 border border-gray-500/25 px-3 py-1 rounded-full backdrop-blur-sm">
                    <i class="fa-solid fa-user mr-1"></i> {{ __('projects_show.solo_badge') }}
                </span>
                @endif
                <span class="text-[11px] text-gray-400 bg-black/20 backdrop-blur-sm px-3 py-1 rounded-full border border-white/5">
                    <i class="fa-regular fa-calendar mr-1"></i> {{ $project['timeline'] }}
                </span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-2 leading-tight reveal visible">
                {{ $project['title'] }}
            </h1>

            <p class="text-indigo-300/80 text-sm sm:text-base reveal reveal-delay-1">
                {{ $project['role'] }}
            </p>
        </div>
    </div>

    {{-- CONTENT --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 -mt-10 relative z-10">

        {{-- NAV BACK --}}
        <div class="mb-8 sm:mb-10 reveal">
            <a href="{{ route('projects.index') }}"
               class="inline-flex items-center gap-2 text-gray-500 hover:text-white text-sm transition group bg-[#0B0F1A]/80 backdrop-blur-sm px-4 py-2 rounded-full border border-white/5">
                <span class="group-hover:-translate-x-1 transition">&larr;</span>
                {{ __('projects_show.back') }}
            </a>
        </div>

        {{-- ACTION BUTTONS --}}
        <div class="flex flex-wrap gap-3 sm:gap-4 mb-12 reveal reveal-delay-1">
            @if ($project['demo_url'])
            <a href="{{ $project['demo_url'] }}" target="_blank"
               class="inline-flex items-center gap-2 bg-indigo-500 hover:bg-indigo-600
                      px-5 py-2.5 rounded-full text-sm font-medium
                      transition shadow-lg shadow-indigo-500/25">
                <i class="fa-solid fa-rocket"></i> {{ __('projects_show.live_demo') }}
            </a>
            @endif
            @if ($project['repo_url'])
            <a href="{{ $project['repo_url'] }}" target="_blank"
               class="inline-flex items-center gap-2 bg-white/[0.06] hover:bg-white/[0.12]
                      border border-white/10 px-5 py-2.5 rounded-full text-sm font-medium transition">
                <i class="fa-brands fa-github"></i> {{ __('projects_show.view_github') }}
            </a>
            @endif
        </div>

        {{-- PULL QUOTE --}}
        <div class="mb-12 reveal reveal-delay-2">
            <p class="text-lg sm:text-xl md:text-2xl text-gray-300 leading-relaxed font-light italic border-l-2 border-indigo-500/50 pl-5 sm:pl-6">
                "{{ $project['full_desc'] }}"
            </p>
        </div>

        {{-- DIVIDER --}}
        <div class="h-px bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent mb-12"></div>

        {{-- KEY FEATURES --}}
        <div class="mb-14 reveal">
            <h2 class="text-xl sm:text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                <span class="w-8 h-8 rounded-lg bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center">
                    <i class="fa-solid fa-list-check text-indigo-400 text-sm"></i>
                </span>
                {{ __('projects_show.key_features') }}
            </h2>

            <div class="grid sm:grid-cols-2 gap-4 sm:gap-5">
                @foreach ($project['features'] as $i => $feature)
                @php
                    $icons = ['fa-solid fa-check', 'fa-solid fa-bolt', 'fa-solid fa-shield', 'fa-solid fa-gauge-high', 'fa-solid fa-bell', 'fa-solid fa-users'];
                @endphp
                <div class="flex items-start gap-3 p-4 rounded-xl bg-white/[0.03] border border-white/[0.06] hover:border-indigo-500/20 transition group">
                    <span class="mt-0.5 w-8 h-8 rounded-lg bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center shrink-0 group-hover:bg-indigo-500/20 transition">
                        <i class="{{ $icons[$i % count($icons)] }} text-indigo-400 text-xs"></i>
                    </span>
                    <span class="text-gray-300 text-sm sm:text-base">{{ $feature }}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- TECH STACK BUBBLE CLOUD --}}
        <div class="mb-14 reveal reveal-delay-1">
            <h2 class="text-xl sm:text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                <span class="w-8 h-8 rounded-lg bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center">
                    <i class="fa-solid fa-cubes text-indigo-400 text-sm"></i>
                </span>
                {{ __('projects_show.tech_stack') }}
            </h2>

            <div class="flex flex-wrap gap-3">
                @php
                    $techStyles = [
                        'Laravel' => 'border-orange-500/30 bg-orange-500/8 text-orange-300',
                        'Tailwind' => 'border-sky-500/30 bg-sky-500/8 text-sky-300',
                        'MySQL' => 'border-blue-500/30 bg-blue-500/8 text-blue-300',
                        'Midtrans' => 'border-purple-500/30 bg-purple-500/8 text-purple-300',
                        'Flutter' => 'border-sky-500/30 bg-sky-500/8 text-sky-300',
                        'Dart' => 'border-blue-500/30 bg-blue-500/8 text-blue-300',
                        'API' => 'border-indigo-500/30 bg-indigo-500/8 text-indigo-300',
                        'Blade' => 'border-rose-500/30 bg-rose-500/8 text-rose-300',
                    ];
                    $techDots = [
                        'Laravel' => 'bg-orange-400',
                        'Tailwind' => 'bg-sky-400',
                        'MySQL' => 'bg-blue-400',
                        'Midtrans' => 'bg-purple-400',
                        'Flutter' => 'bg-sky-400',
                        'Dart' => 'bg-blue-400',
                        'API' => 'bg-indigo-400',
                        'Blade' => 'bg-rose-400',
                    ];
                @endphp
                @foreach ($project['tech'] as $tech)
                <span class="tech-bubble {{ $techStyles[$tech] ?? 'border-gray-500/30 bg-gray-500/8 text-gray-300' }}">
                    <span class="tech-bubble-dot {{ $techDots[$tech] ?? 'bg-gray-400' }}"></span>
                    {{ $tech }}
                </span>
                @endforeach
            </div>
        </div>

        {{-- COLLABORATORS --}}
        @if (count($collaborators) > 0)
        <div class="mb-14 reveal reveal-delay-2">
            <h2 class="text-xl sm:text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                <span class="w-8 h-8 rounded-lg bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center">
                    <i class="fa-solid fa-handshake text-indigo-400 text-sm"></i>
                </span>
                {{ __('projects_show.collaborators') }}
            </h2>

            <div class="flex flex-wrap gap-4">
                @foreach ($collaborators as $collab)
                <a href="{{ $collab['github_url'] }}" target="_blank"
                   class="group flex items-center gap-4 p-4 rounded-xl bg-white/[0.03] border border-white/[0.06]
                          hover:bg-white/[0.06] hover:border-indigo-500/25 transition flex-1 min-w-[220px] sm:min-w-0 sm:w-auto">
                    <img src="{{ $collab['avatar'] ?? 'https://i.pravatar.cc/80' }}"
                         class="w-11 h-11 rounded-full border-2 border-indigo-500/30 group-hover:border-indigo-400 transition shadow-lg"
                         alt="{{ $collab['name'] }}">
                    <div class="min-w-0">
                        <p class="text-white font-medium text-sm group-hover:text-indigo-400 transition truncate">
                            {{ $collab['name'] }}
                        </p>
                        <p class="text-gray-500 text-xs">{{ $collab['role'] }}</p>
                    </div>
                    <i class="fa-brands fa-github text-gray-600 group-hover:text-white ml-auto text-lg transition"></i>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- PROJECT INFO CARD --}}
        <div class="mb-14 reveal reveal-delay-3">
            <div class="p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/[0.06] backdrop-blur-sm">
                <h2 class="text-xl sm:text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center">
                        <i class="fa-solid fa-circle-info text-indigo-400 text-sm"></i>
                    </span>
                    {{ __('projects_show.project_info') }}
                </h2>
                <div class="grid sm:grid-cols-3 gap-6">
                    <div>
                        <p class="text-gray-500 text-xs mb-1">{{ __('projects_show.role') }}</p>
                        <p class="text-white text-sm font-medium">{{ $project['role'] }}</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-xs mb-1">{{ __('projects_show.timeline') }}</p>
                        <p class="text-white text-sm font-medium">{{ $project['timeline'] }}</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-xs mb-1">{{ __('projects_show.type') }}</p>
                        <p class="text-white text-sm font-medium">
                            {{ count($project['collaborators']) > 0 ? __('projects_show.team_type') : __('projects_show.solo_type') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- DIVIDER --}}
        <div class="h-px bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent mb-14"></div>

        {{-- RELATED PROJECTS --}}
        @if (count($related) > 0)
        <div class="mb-16 reveal">
            <h2 class="text-xl sm:text-2xl font-semibold text-white mb-2">{{ __('projects_show.continue_exploring') }}</h2>
            <p class="text-gray-500 text-sm mb-6">{{ __('projects_show.related_subtitle') }}</p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ($related as $rel)
                <a href="{{ route('projects.show', $rel['slug']) }}"
                   class="group bg-[#0f172a]/60 rounded-xl overflow-hidden border border-white/[0.06]
                          hover:border-indigo-500/25 transition block">
                    <div class="relative overflow-hidden h-28 sm:h-32 bg-gradient-to-br from-indigo-900/30 to-purple-900/30">
                        <img src="{{ asset('images/projects/' . $rel['image']) }}"
                             onerror="this.style.display='none'; this.parentElement.classList.add('flex','items-center','justify-center'); this.parentElement.innerHTML='<span class=\'text-indigo-400 text-xs font-semibold\'>{{ $rel['title'] }}</span>'"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                             alt="{{ $rel['title'] }}">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-white group-hover:text-indigo-400 transition line-clamp-1">
                            {{ $rel['title'] }}
                        </h3>
                        <p class="text-xs text-gray-500 mt-1 line-clamp-2">{{ $rel['short_desc'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

{{-- Reading Progress Script --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const bar = document.getElementById('reading-progress-bar');
    if (!bar) return;

    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        bar.style.width = Math.min(progress, 100) + '%';
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const revealEls = document.querySelectorAll('.reveal');
    if (!revealEls.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(el => observer.observe(el));
});
</script>

@endsection
