<section id="colaborasi" class="relative py-14 sm:py-18 bg-[#070B1A] overflow-hidden">

    {{-- BACKGROUND GLOW ORBS --}}
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-1/4 left-0 w-[500px] h-[500px] bg-indigo-600/15 blur-[140px] rounded-full"></div>
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-purple-600/10 blur-[160px] rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-indigo-500/5 blur-[120px] rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        {{-- HEADER --}}
        <div class="text-center mb-14 sm:mb-20">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs sm:text-sm tracking-widest mb-4 animate-fade-in-up">
                <span class="w-1.5 h-1.5 bg-indigo-400 rounded-full animate-ping"></span>
                {{ __('colaborasi.section_label') }}
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white animate-fade-in-up">
                {{ __('colaborasi.heading_start') }}<span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 text-transparent bg-clip-text"> {{ __('colaborasi.heading_end') }}</span> {{ __('colaborasi.heading_with') }}
            </h2>
            <p class="text-gray-500 text-sm sm:text-base mt-3 max-w-xl mx-auto animate-fade-in-up">
                {{ __('colaborasi.subtitle') }}
            </p>
        </div>

        {{-- TEAM GRID --}}
        @if (count($members) > 0)
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-10">
            @foreach ($members as $index => $member)
            <div style="animation-delay: {{ $index * 0.15 }}s"
                 class="group relative p-[1px] rounded-2xl animate-fade-in-up
                        bg-gradient-to-b from-white/10 via-transparent to-transparent
                        hover:from-indigo-500/40 hover:via-purple-500/20 hover:to-transparent
                        transition-all duration-700">

                {{-- CARD --}}
                <div class="relative p-6 sm:p-8 rounded-2xl h-full
                            bg-[#0B0F1A]/90 backdrop-blur-xl
                            border border-white/[0.06]
                            shadow-[0_10px_40px_rgba(0,0,0,0.5)]
                            group-hover:shadow-[0_20px_60px_rgba(99,102,241,0.15)]
                            group-hover:border-indigo-500/20
                            transition-all duration-500">

                    {{-- TOP GRADIENT OVERLAY ON HOVER --}}
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-b from-indigo-500/[0.03] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

                    <div class="relative z-10 flex flex-col items-center text-center">

                        {{-- AVATAR WITH GLOW RING --}}
                        <div class="relative mb-5">
                            <div class="absolute -inset-2 rounded-full bg-gradient-to-br from-indigo-500/30 via-purple-500/20 to-transparent opacity-0 group-hover:opacity-100 blur-md transition-opacity duration-500"></div>
                            <div class="relative">
                                <img src="{{ $member['avatar'] ?? 'https://i.pravatar.cc/120' }}"
                                     class="w-20 h-20 sm:w-24 sm:h-24 rounded-full object-cover
                                            ring-2 ring-white/10 group-hover:ring-indigo-500/40
                                            shadow-lg shadow-black/30
                                            transition-all duration-500"
                                     alt="{{ $member['name'] }}">
                                <div class="absolute -bottom-0.5 -right-0.5 w-4 h-4 bg-emerald-500 border-[3px] border-[#0B0F1A] rounded-full">
                                    <div class="absolute inset-0 bg-emerald-400 rounded-full animate-ping opacity-50"></div>
                                </div>
                            </div>
                        </div>

                        {{-- NAME --}}
                        <h3 class="text-white font-bold text-lg sm:text-xl mb-1.5
                                   group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-white group-hover:to-indigo-200 group-hover:bg-clip-text
                                   transition-all duration-500">
                            {{ $member['name'] }}
                        </h3>

                        {{-- ROLE BADGE --}}
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full
                                    bg-indigo-500/10 border border-indigo-500/20
                                    text-indigo-400 text-xs font-medium mb-4">
                            <i class="fa-solid fa-code text-[10px]"></i>
                            {{ $member['role'] }}
                        </div>

                        {{-- BIO --}}
                        @if ($member['bio'])
                        <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-5 line-clamp-3 min-h-[3.5em]">
                            {{ $member['bio'] }}
                        </p>
                        @else
                        <p class="text-gray-600 text-xs sm:text-sm italic mb-5 min-h-[3.5em]">
                            {{ __('colaborasi.no_bio') }}
                        </p>
                        @endif

                        {{-- STATS ROW --}}
                        <div class="flex items-center justify-center gap-4 mb-5 text-xs">
                            @if ($member['location'])
                            <span class="text-gray-500 flex items-center gap-1.5" title="Location">
                                <i class="fa-solid fa-location-dot text-indigo-400/60"></i>
                                <span class="truncate max-w-[100px]">{{ $member['location'] }}</span>
                            </span>
                            @endif
                            @if ($member['public_repos'])
                            <span class="text-gray-500 flex items-center gap-1.5" title="Public Repositories">
                                <i class="fa-regular fa-folder-open text-indigo-400/60"></i>
                                {{ $member['public_repos'] }} repos
                            </span>
                            @endif
                            @if ($member['company'])
                            <span class="text-gray-500 flex items-center gap-1.5" title="Company">
                                <i class="fa-solid fa-building text-indigo-400/60"></i>
                                <span class="truncate max-w-[100px]">{{ $member['company'] }}</span>
                            </span>
                            @endif
                        </div>

                        {{-- GITHUB BUTTON --}}
                        <a href="{{ $member['github_url'] }}" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-xl w-full justify-center
                                  bg-white/5 border border-white/10
                                  text-gray-300 text-sm font-medium
                                  group/btn
                                  hover:bg-indigo-500 hover:border-indigo-500 hover:text-white
                                  hover:shadow-lg hover:shadow-indigo-500/25
                                  transition-all duration-300">
                            <i class="fa-brands fa-github text-base"></i>
                            <span>@</span>
                        </a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        {{-- EMPTY STATE --}}
        <div class="text-center py-16">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/5 border border-white/10 mb-4">
                <i class="fa-solid fa-users text-2xl text-gray-500"></i>
            </div>
            <p class="text-gray-500 text-sm">No collaborators yet.</p>
        </div>
        @endif

        {{-- VIEW FULL TEAM --}}
        <div class="text-center mt-12 sm:mt-16">
            <a href="{{ route('team.index') }}"
               class="group/btn inline-flex items-center gap-3
                      px-6 py-3 rounded-xl
                      bg-gradient-to-r from-indigo-500/10 to-purple-500/10
                      border border-indigo-500/20
                      text-gray-300 text-sm font-medium
                      hover:from-indigo-500 hover:to-purple-600
                      hover:text-white hover:border-transparent
                      hover:shadow-lg hover:shadow-indigo-500/25
                      transition-all duration-300">
                <span>{{ __('colaborasi.view_full_team') }}</span>
                <i class="fa-solid fa-arrow-right text-xs group-hover/btn:translate-x-1 transition-transform duration-300"></i>
            </a>
        </div>

    </div>
</section>