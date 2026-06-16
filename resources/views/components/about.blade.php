<section id="about" class="relative py-14 sm:py-18 overflow-hidden bg-surface">

    <!-- DECORATIVE BACKGROUND -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-20 right-0 w-[500px] h-[500px] bg-indigo-500/10 blur-[140px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-purple-500/8 blur-[120px] rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- SECTION LABEL -->
        <div class="flex items-center gap-4 mb-3 justify-center md:justify-start">
            <span class="w-8 h-[2px] bg-indigo-400"></span>
            <p class="text-indigo-400 text-xs sm:text-sm tracking-[0.2em] font-medium">{{ __('about.section_label') }}</p>
            <span class="w-8 h-[2px] bg-indigo-400"></span>
        </div>

        <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center mt-6">

            <!-- ======================= LEFT: IMAGE ======================= -->
            <div class="relative flex justify-center md:justify-start">

                <!-- GLOW BACKDROP -->
                <div class="absolute w-[350px] h-[350px] sm:w-[400px] sm:h-[400px] bg-gradient-to-br from-indigo-500/20 to-purple-500/20 blur-[120px] rounded-full -z-10"></div>

                <!-- DECORATIVE SHAPES -->
                <div class="absolute -top-4 -left-4 sm:-top-6 sm:-left-6 w-20 h-20 sm:w-28 sm:h-28 border border-indigo-400/20 rounded-2xl -rotate-12 opacity-40"></div>
                <div class="absolute bottom-8 -right-4 sm:bottom-10 sm:-right-6 w-14 h-14 sm:w-20 sm:h-20 border border-purple-400/15 rounded-full opacity-30"></div>
                <div class="absolute top-1/2 -left-8 sm:-left-12 w-3 h-3 sm:w-4 sm:h-4 bg-indigo-400 rounded-full animate-pulse-soft opacity-60"></div>
                <div class="absolute bottom-20 right-8 sm:right-12 w-2 h-2 sm:w-3 sm:h-3 bg-purple-400 rounded-full animate-pulse-soft opacity-60" style="animation-delay: 1.5s"></div>

                <!-- PHOTO CARD -->
                <div class="relative z-10 group">

                    <!-- GLASS BACKDROP -->
                    <div class="absolute -inset-3 sm:-inset-4 rounded-2xl sm:rounded-3xl bg-white/[0.03] backdrop-blur-2xl border border-white/[0.06] shadow-2xl shadow-black/40"></div>

                    <!-- GRADIENT BORDER WRAPPER -->
                    <div class="relative rounded-2xl sm:rounded-3xl p-[2px] animate-gradient-move shadow-2xl shadow-indigo-500/20 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500">

                        <!-- IMAGE -->
                        <div class="rounded-2xl sm:rounded-3xl overflow-hidden">
                            <img src="{{ asset('images/profile/profile2.jpeg') }}" 
                                 alt="Andika Rizaldi"
                                 class="w-[280px] sm:w-[340px] md:w-[380px] object-cover 
                                        group-hover:scale-105 transition duration-700 ease-out">
                        </div>

                    </div>

                    <!-- INNER SHADOW OVERLAY -->
                    <div class="absolute inset-0 rounded-2xl sm:rounded-3xl shadow-[inset_0_0_80px_rgba(0,0,0,0.4)] pointer-events-none"></div>

                    <!-- EXPERIENCE BADGE -->
                    <div class="absolute -bottom-3 -right-3 sm:-bottom-4 sm:-right-4 z-20 animate-fade-up">
                        <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl sm:rounded-2xl px-3 sm:px-5 py-2 sm:py-3 shadow-xl shadow-indigo-500/40 flex items-center gap-2 sm:gap-3">
                            <span class="text-xl sm:text-3xl font-bold text-white">2+</span>
                            <div class="text-left">
                                <p class="text-[10px] sm:text-xs text-indigo-200 leading-tight">{{ __('about.years_of') }}</p>
                                <p class="text-[10px] sm:text-xs text-white font-semibold leading-tight">{{ __('about.experience') }}</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- ======================= RIGHT: CONTENT ======================= -->
            <div class="text-center md:text-left max-w-xl mx-auto md:mx-0">

                <!-- HEADLINE -->
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-5 leading-tight">
                    {{ __('about.heading_start') }}
                    <span class="bg-gradient-to-r from-indigo-400 to-purple-400 text-transparent bg-clip-text">{{ __('about.heading_end') }}</span>
                </h2>

                <!-- BIO -->
                <div class="space-y-4 text-gray-400 text-sm sm:text-base leading-relaxed mb-8">
                    <p>{{ __('about.bio_1') }}</p>
                    <p>{{ __('about.bio_2') }}</p>
                    <p>{{ __('about.bio_3') }}</p>
                </div>

                <!-- STATS CARDS -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 mb-8">
                    <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-3 sm:p-4 hover:bg-white/[0.06] hover:border-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/5 transition duration-300">
                        <p class="text-xl sm:text-2xl font-bold text-white">2+</p>
                        <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('about.stat_years') }}</p>
                    </div>
                    <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-3 sm:p-4 hover:bg-white/[0.06] hover:border-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/5 transition duration-300">
                        <p class="text-xl sm:text-2xl font-bold text-white">10+</p>
                        <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('about.stat_projects') }}</p>
                    </div>
                    <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-3 sm:p-4 hover:bg-white/[0.06] hover:border-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/5 transition duration-300">
                        <p class="text-xl sm:text-2xl font-bold text-white">5+</p>
                        <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('about.stat_clients') }}</p>
                    </div>
                    <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-3 sm:p-4 hover:bg-white/[0.06] hover:border-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/5 transition duration-300">
                        <p class="text-xl sm:text-2xl font-bold text-white">5+</p>
                        <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('about.stat_tech') }}</p>
                    </div>
                </div>

                <!-- SKILL TAGS -->
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-8 justify-center md:justify-start">
                    <span class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-medium
                        bg-indigo-500/10 text-indigo-300 border border-indigo-500/20
                        hover:bg-indigo-500/20 hover:border-indigo-500/40 hover:shadow-lg hover:shadow-indigo-500/10
                        transition duration-300 cursor-default">Python</span>
                    <span class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-medium
                        bg-orange-500/10 text-orange-300 border border-orange-500/20
                        hover:bg-orange-500/20 hover:border-orange-500/40 hover:shadow-lg hover:shadow-orange-500/10
                        transition duration-300 cursor-default">Laravel</span>
                    <span class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-medium
                        bg-sky-500/10 text-sky-300 border border-sky-500/20
                        hover:bg-sky-500/20 hover:border-sky-500/40 hover:shadow-lg hover:shadow-sky-500/10
                        transition duration-300 cursor-default">Flutter</span>
                    <span class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-medium
                        bg-emerald-500/10 text-emerald-300 border border-emerald-500/20
                        hover:bg-emerald-500/20 hover:border-emerald-500/40 hover:shadow-lg hover:shadow-emerald-500/10
                        transition duration-300 cursor-default">Ms. Word</span>
                    <span class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-medium
                        bg-purple-500/10 text-purple-300 border border-purple-500/20
                        hover:bg-purple-500/20 hover:border-purple-500/40 hover:shadow-lg hover:shadow-purple-500/10
                        transition duration-300 cursor-default">Data Entry</span>
                    <span class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-medium
                        bg-rose-500/10 text-rose-300 border border-rose-500/20
                        hover:bg-rose-500/20 hover:border-rose-500/40 hover:shadow-lg hover:shadow-rose-500/10
                        transition duration-300 cursor-default">MySQL</span>
                </div>

                <!-- CTA BUTTONS -->
                <div class="flex gap-3 sm:gap-4 justify-center md:justify-start flex-wrap">
                    <a href="{{ asset('cv/resume-ANDIKHA RIZALDI.pdf') }}" download
                       class="inline-flex items-center gap-2 px-5 sm:px-6 py-2.5 sm:py-3 rounded-xl text-sm sm:text-base font-medium
                              bg-gradient-to-r from-indigo-500 to-purple-500 
                              hover:opacity-90 hover:shadow-lg hover:shadow-indigo-500/30
                              transition shadow-md shadow-indigo-500/20">
                        <i class="fa-solid fa-download text-xs"></i>
                        {{ __('about.download_cv') }}
                    </a>
                    <a href="#contact" class="inline-flex items-center gap-2 px-5 sm:px-6 py-2.5 sm:py-3 rounded-xl text-sm sm:text-base font-medium
                        border border-indigo-400/30 text-white
                        hover:bg-indigo-500/10 hover:border-indigo-400/60
                        transition">
                        {{ __('about.lets_talk') }}
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>
