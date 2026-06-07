@extends('layouts.app')

@section('content')

<section class="pt-28 pb-16 sm:pt-36 sm:pb-20 bg-surface min-h-screen">

    {{-- BACKGROUND GLOW --}}
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2
            w-[600px] sm:w-[900px] h-[600px] sm:h-[900px]
            bg-indigo-600/10 blur-[120px] sm:blur-[160px] rounded-full">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        {{-- HEADER --}}
        <div class="text-center mb-12 sm:mb-16">
            <p class="text-indigo-400 text-xs sm:text-sm tracking-widest mb-2">{{ __('team.section_label') }}</p>
            <h1 class="text-3xl sm:text-5xl font-bold text-white mb-3">
                {{ __('team.heading_start') }} <span class="text-indigo-400">{{ __('team.heading_end') }}</span> {{ __('team.heading_with') }}
            </h1>
            <p class="text-gray-400 text-sm sm:text-base max-w-2xl mx-auto">
                {{ __('team.subtitle') }}
            </p>
        </div>

        {{-- TEAM GRID --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

            @foreach ($members as $index => $member)
            <div style="animation-delay: {{ $index * 0.15 }}s"
                 class="group p-6 sm:p-8 rounded-2xl animate-fade-in-up
                        bg-white/5 backdrop-blur-xl
                        border border-white/10
                        shadow-[0_10px_40px_rgba(0,0,0,0.4)]
                        hover:scale-[1.02] sm:hover:scale-[1.03]
                        hover:border-indigo-500/30
                        transition duration-300">

                <div class="flex flex-col items-center text-center">

                    {{-- AVATAR --}}
                    <div class="relative mb-4 sm:mb-5">
                        <img src="{{ $member['avatar'] ?? 'https://i.pravatar.cc/120' }}"
                             class="w-20 h-20 sm:w-24 sm:h-24 rounded-full
                                    border-2 border-indigo-500/30
                                    shadow-lg shadow-indigo-500/20"
                             alt="{{ $member['name'] }}">
                        <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-emerald-500 border-2 border-surface rounded-full"></div>
                    </div>

                    {{-- NAME & ROLE --}}
                    <h3 class="text-white font-semibold text-lg sm:text-xl mb-1">{{ $member['name'] }}</h3>
                    <p class="text-indigo-400 text-sm sm:text-base mb-3">{{ $member['role'] }}</p>

                    {{-- BIO --}}
                    @if ($member['bio'])
                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-4 line-clamp-3">
                        {{ $member['bio'] }}
                    </p>
                    @endif

                    {{-- GITHUB STATS --}}
                    <div class="flex items-center gap-4 mb-4 text-xs sm:text-sm">
                        @if ($member['location'])
                        <span class="text-gray-500 flex items-center gap-1">
                            <i class="fa-solid fa-location-dot"></i> {{ $member['location'] }}
                        </span>
                        @endif
                        @if ($member['public_repos'])
                        <span class="text-gray-500 flex items-center gap-1">
                            <i class="fa-solid fa-code-branch"></i> {{ $member['public_repos'] }} repos
                        </span>
                        @endif
                    </div>

                    {{-- GITHUB LINK --}}
                    <a href="{{ $member['github_url'] }}" target="_blank"
                       class="inline-flex items-center gap-2 px-4 py-2 rounded-lg
                              bg-white/5 border border-white/10 text-gray-300 text-sm
                              hover:bg-indigo-500 hover:text-white hover:border-indigo-500
                              transition">
                        <i class="fa-brands fa-github"></i>
                        {{ $member['github'] }}
                    </a>

                </div>
            </div>
            @endforeach

        </div>

        {{-- BACK --}}
        <div class="text-center mt-12">
            <a href="{{ route('home') }}#colaborasi" class="text-gray-400 hover:text-white text-sm transition">
                &larr; {{ __('team.back') }}
            </a>
        </div>

    </div>
</section>

@endsection
