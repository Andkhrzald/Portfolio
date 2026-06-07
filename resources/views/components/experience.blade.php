<section id="experience" class="relative py-14 sm:py-18 overflow-hidden bg-surface">

    <!-- DECORATIVE BACKGROUND -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-40 left-0 w-[600px] h-[600px] bg-indigo-500/8 blur-[160px] rounded-full"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-purple-500/8 blur-[120px] rounded-full"></div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <!-- ===== SECTION HEADER ===== -->
        <div class="text-center mb-16 sm:mb-20">
            <div class="flex items-center justify-center gap-4 mb-4">
                <span class="w-10 h-[2px] bg-gradient-to-r from-transparent via-indigo-400 to-transparent"></span>
                <p class="text-indigo-400 text-xs sm:text-sm tracking-[0.25em] font-medium">{{ __('experience.section_label') }}</p>
                <span class="w-10 h-[2px] bg-gradient-to-r from-transparent via-indigo-400 to-transparent"></span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold">
                {{ __('experience.heading_start') }}
                <span class="bg-gradient-to-r from-indigo-400 to-purple-400 text-transparent bg-clip-text">{{ __('experience.heading_end') }}</span>
            </h2>
            <p class="text-gray-500 text-sm sm:text-base mt-3 max-w-xl mx-auto">
                {{ __('experience.subtitle') }}
            </p>
        </div>

        <!-- ===== TIMELINE ===== -->
        <div class="relative">

            <!-- VERTICAL LINE (DESKTOP & MOBILE) -->
            <div class="absolute left-[18px] sm:left-[22px] md:left-1/2 md:-translate-x-px top-0 bottom-0 w-[2px] z-10">
                <div class="absolute inset-0 bg-gradient-to-b from-indigo-500/40 via-purple-500/30 to-indigo-500/20"></div>
                <div class="absolute top-0 left-0 w-full h-[60%] 
                    bg-gradient-to-b from-transparent via-indigo-400 to-transparent
                    blur-[3px] animate-lineGlowY"></div>
            </div>

            <!-- ================================================================== -->
            <!-- WORK EXPERIENCE SECTION                                           -->
            <!-- ================================================================== -->
            <div class="relative z-20 mb-16 sm:mb-20">

                <!-- Section Label -->
                <div class="flex items-center gap-3 mb-8 md:mb-12 md:pl-0">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/30">
                        <i class="fa-solid fa-briefcase text-white text-sm"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-white">{{ __('experience.work_section') }}</h3>
                    <div class="flex-1 h-px bg-gradient-to-r from-white/10 to-transparent ml-3"></div>
                </div>

                <!-- Experience Items -->
                <div class="space-y-8 sm:space-y-10">

                    <!-- ASTRA CREDIT COMPANIES -->
                    <div class="relative group pl-12 sm:pl-14 md:pl-0">
                        <!-- Timeline Dot -->
                        <div class="absolute left-[10px] sm:left-[14px] md:left-1/2 md:-translate-x-1/2 top-2 w-[18px] h-[18px] sm:w-[22px] sm:h-[22px] 
                            rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 border-[3px] border-surface
                            shadow-[0_0_12px_rgba(52,211,153,0.5)] group-hover:shadow-[0_0_20px_rgba(52,211,153,0.7)]
                            transition duration-300 z-10"></div>
                        <!-- Year Badge (Mobile) -->
                        <div class="md:hidden flex items-center gap-2 mb-2">
                            <span class="text-[11px] font-semibold text-emerald-400 bg-emerald-500/10 px-2.5 py-0.5 rounded-full border border-emerald-500/20">Feb 2026 - Present</span>
                            <span class="text-[10px] text-gray-500">{{ __('experience.internship') }}</span>
                        </div>
                        <!-- Card -->
                        <div class="md:w-[calc(50%-40px)] md:ml-[calc(50%+40px)] 
                            bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-2xl p-5 sm:p-6
                            hover:bg-white/[0.05] hover:border-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/5
                            transition duration-300">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-white">Astra Credit Companies</h4>
                                    <p class="text-indigo-300 text-xs sm:text-sm font-medium">{{ __('experience.astra.role') }}</p>
                                </div>
                                <span class="hidden md:inline-flex text-[11px] font-medium text-emerald-400 bg-emerald-500/10 px-2.5 py-1 rounded-full border border-emerald-500/20 whitespace-nowrap">Feb 2026 - Present</span>
                            </div>
                            <p class="text-gray-400 text-xs sm:text-sm mb-1">{{ __('experience.astra.address') }}</p>
                            <ul class="space-y-1.5 mt-3">
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.astra.task1') }}
                                </li>
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.astra.task2') }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- PT GEMILANG ARKADE INDONESIA -->
                    <div class="relative group pl-12 sm:pl-14 md:pl-0">
                        <div class="absolute left-[10px] sm:left-[14px] md:left-1/2 md:-translate-x-1/2 top-2 w-[18px] h-[18px] sm:w-[22px] sm:h-[22px] 
                            rounded-full bg-gradient-to-br from-indigo-400 to-indigo-600 border-[3px] border-surface
                            shadow-[0_0_12px_rgba(99,102,241,0.5)] group-hover:shadow-[0_0_20px_rgba(99,102,241,0.7)]
                            transition duration-300 z-10"></div>
                        <div class="md:hidden flex items-center gap-2 mb-2">
                            <span class="text-[11px] font-semibold text-indigo-400 bg-indigo-500/10 px-2.5 py-0.5 rounded-full border border-indigo-500/20">May 2024 - Sep 2024</span>
                            <span class="text-[10px] text-gray-500">{{ __('experience.contract') }}</span>
                        </div>
                        <!-- Card (alternating: left on desktop) -->
                        <div class="md:w-[calc(50%-40px)] md:mr-[calc(50%+40px)] 
                            bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-2xl p-5 sm:p-6
                            hover:bg-white/[0.05] hover:border-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/5
                            transition duration-300">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-white">PT Gemilang Arkade Indonesia</h4>
                                    <p class="text-indigo-300 text-xs sm:text-sm font-medium">{{ __('experience.gemilang.role') }}</p>
                                </div>
                                <span class="hidden md:inline-flex text-[11px] font-medium text-indigo-400 bg-indigo-500/10 px-2.5 py-1 rounded-full border border-indigo-500/20 whitespace-nowrap">May - Sep 2024</span>
                            </div>
                            <p class="text-gray-400 text-xs sm:text-sm mb-1">{{ __('experience.gemilang.address') }}</p>
                            <ul class="space-y-1.5 mt-3">
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.gemilang.task1') }}
                                </li>
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.gemilang.task2') }}
                                </li>
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.gemilang.task3') }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- WALIKOTA ADMINISTRASI JAKARTA PUSAT -->
                    <div class="relative group pl-12 sm:pl-14 md:pl-0">
                        <div class="absolute left-[10px] sm:left-[14px] md:left-1/2 md:-translate-x-1/2 top-2 w-[18px] h-[18px] sm:w-[22px] sm:h-[22px] 
                            rounded-full bg-gradient-to-br from-purple-400 to-purple-600 border-[3px] border-surface
                            shadow-[0_0_12px_rgba(168,85,247,0.5)] group-hover:shadow-[0_0_20px_rgba(168,85,247,0.7)]
                            transition duration-300 z-10"></div>
                        <div class="md:hidden flex items-center gap-2 mb-2">
                            <span class="text-[11px] font-semibold text-purple-400 bg-purple-500/10 px-2.5 py-0.5 rounded-full border border-purple-500/20">Jan 2023 - Mar 2023</span>
                            <span class="text-[10px] text-gray-500">{{ __('experience.internship') }}</span>
                        </div>
                        <div class="md:w-[calc(50%-40px)] md:ml-[calc(50%+40px)] 
                            bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-2xl p-5 sm:p-6
                            hover:bg-white/[0.05] hover:border-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/5
                            transition duration-300">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-white">Walikota Administrasi Jakarta Pusat</h4>
                                    <p class="text-indigo-300 text-xs sm:text-sm font-medium">{{ __('experience.walikota.role') }}</p>
                                </div>
                                <span class="hidden md:inline-flex text-[11px] font-medium text-purple-400 bg-purple-500/10 px-2.5 py-1 rounded-full border border-purple-500/20 whitespace-nowrap">Jan - Mar 2023</span>
                            </div>
                            <p class="text-gray-400 text-xs sm:text-sm mb-1">{{ __('experience.walikota.address') }}</p>
                            <ul class="space-y-1.5 mt-3">
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-purple-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.walikota.task1') }}
                                </li>
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-purple-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.walikota.task2') }}
                                </li>
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-purple-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.walikota.task3') }}
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ================================================================== -->
            <!-- EDUCATION SECTION                                                -->
            <!-- ================================================================== -->
            <div class="relative z-20 mb-16 sm:mb-20">

                <div class="flex items-center gap-3 mb-8 md:mb-12">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-sky-500 to-cyan-600 flex items-center justify-center shadow-lg shadow-sky-500/30">
                        <i class="fa-solid fa-graduation-cap text-white text-sm"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-white">{{ __('experience.education_section') }}</h3>
                    <div class="flex-1 h-px bg-gradient-to-r from-white/10 to-transparent ml-3"></div>
                </div>

                <div class="space-y-8 sm:space-y-10">

                    <!-- UNIVERSITAS BSI -->
                    <div class="relative group pl-12 sm:pl-14 md:pl-0">
                        <div class="absolute left-[10px] sm:left-[14px] md:left-1/2 md:-translate-x-1/2 top-2 w-[18px] h-[18px] sm:w-[22px] sm:h-[22px] 
                            rounded-full bg-gradient-to-br from-sky-400 to-sky-600 border-[3px] border-surface
                            shadow-[0_0_12px_rgba(14,165,233,0.5)] group-hover:shadow-[0_0_20px_rgba(14,165,233,0.7)]
                            transition duration-300 z-10"></div>
                        <div class="md:hidden flex items-center gap-2 mb-2">
                            <span class="text-[11px] font-semibold text-sky-400 bg-sky-500/10 px-2.5 py-0.5 rounded-full border border-sky-500/20">2024 - 2028 (Expected)</span>
                        </div>
                        <div class="md:w-[calc(50%-40px)] md:mr-[calc(50%+40px)] 
                            bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-2xl p-5 sm:p-6
                            hover:bg-white/[0.05] hover:border-sky-500/20 hover:shadow-lg hover:shadow-sky-500/5
                            transition duration-300">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-white">Universitas Bina Sarana Informatika</h4>
                                    <p class="text-sky-300 text-xs sm:text-sm font-medium">{{ __('experience.univ.major') }}</p>
                                </div>
                                <span class="hidden md:inline-flex text-[11px] font-medium text-sky-400 bg-sky-500/10 px-2.5 py-1 rounded-full border border-sky-500/20 whitespace-nowrap">2024 - 2028</span>
                            </div>
                            <p class="text-gray-400 text-xs sm:text-sm mb-1">{{ __('experience.univ.address') }}</p>
                            <ul class="space-y-1.5 mt-3">
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-sky-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.univ.task1') }}
                                </li>
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-sky-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.univ.task2') }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- SMK MUHAMMADIYAH 2 -->
                    <div class="relative group pl-12 sm:pl-14 md:pl-0">
                        <div class="absolute left-[10px] sm:left-[14px] md:left-1/2 md:-translate-x-1/2 top-2 w-[18px] h-[18px] sm:w-[22px] sm:h-[22px] 
                            rounded-full bg-gradient-to-br from-teal-400 to-teal-600 border-[3px] border-surface
                            shadow-[0_0_12px_rgba(20,184,166,0.5)] group-hover:shadow-[0_0_20px_rgba(20,184,166,0.7)]
                            transition duration-300 z-10"></div>
                        <div class="md:hidden flex items-center gap-2 mb-2">
                            <span class="text-[11px] font-semibold text-teal-400 bg-teal-500/10 px-2.5 py-0.5 rounded-full border border-teal-500/20">2020 - 2023</span>
                        </div>
                        <div class="md:w-[calc(50%-40px)] md:ml-[calc(50%+40px)] 
                            bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-2xl p-5 sm:p-6
                            hover:bg-white/[0.05] hover:border-teal-500/20 hover:shadow-lg hover:shadow-teal-500/5
                            transition duration-300">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-white">SMK Muhammadiyah 2 Jakarta</h4>
                                    <p class="text-teal-300 text-xs sm:text-sm font-medium">{{ __('experience.smk.major') }}</p>
                                </div>
                                <span class="hidden md:inline-flex text-[11px] font-medium text-teal-400 bg-teal-500/10 px-2.5 py-1 rounded-full border border-teal-500/20 whitespace-nowrap">2020 - 2023</span>
                            </div>
                            <p class="text-gray-400 text-xs sm:text-sm mb-1">{{ __('experience.smk.address') }}</p>
                            <ul class="space-y-1.5 mt-3">
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-teal-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.smk.task1') }}
                                </li>
                                <li class="flex items-start gap-2 text-gray-400 text-xs sm:text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-teal-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.smk.task2') }}
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ================================================================== -->
            <!-- PROJECTS SECTION                                                  -->
            <!-- ================================================================== -->
            <div class="relative z-20">

                <div class="flex items-center gap-3 mb-8 md:mb-12">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center shadow-lg shadow-amber-500/30">
                        <i class="fa-solid fa-code text-white text-sm"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-white">{{ __('experience.featured_section') }}</h3>
                    <div class="flex-1 h-px bg-gradient-to-r from-white/10 to-transparent ml-3"></div>
                </div>

                <div class="grid sm:grid-cols-2 gap-5 sm:gap-6">

                    <!-- ELVOAPP -->
                    <div class="group bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-2xl p-5 sm:p-6
                        hover:bg-white/[0.05] hover:border-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/5
                        transition duration-300">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-sky-500 to-blue-600 flex items-center justify-center shadow-lg">
                                <i class="fa-brands fa-flutter text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="text-sm sm:text-base font-semibold text-white">ELVOAPP</h4>
                                <p class="text-[11px] text-gray-500">{{ __('experience.elvoapp.subtitle') }}</p>
                            </div>
                        </div>
                        <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-3">
                            {{ __('experience.elvoapp.desc') }}
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-3">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-sky-500/10 text-sky-300 border border-sky-500/20">Flutter</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-purple-500/10 text-purple-300 border border-purple-500/20">Figma</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-emerald-500/10 text-emerald-300 border border-emerald-500/20">UI/UX</span>
                        </div>
                        <ul class="space-y-1 text-gray-400 text-xs sm:text-sm">
                                <li class="flex items-start gap-2">
                                    <span class="w-1 h-1 rounded-full bg-sky-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.elvoapp.feature1') }}
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1 h-1 rounded-full bg-sky-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.elvoapp.feature2') }}
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1 h-1 rounded-full bg-sky-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.elvoapp.feature3') }}
                                </li>
                        </ul>
                    </div>

                    <!-- ELVOAPP_V2 -->
                    <div class="group bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-2xl p-5 sm:p-6
                        hover:bg-white/[0.05] hover:border-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/5
                        transition duration-300">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center shadow-lg">
                                <i class="fa-brands fa-laravel text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="text-sm sm:text-base font-semibold text-white">ELVOAPP_V2</h4>
                                <p class="text-[11px] text-gray-500">{{ __('experience.elvoapp_v2.subtitle') }}</p>
                            </div>
                        </div>
                        <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-3">
                            {{ __('experience.elvoapp_v2.desc') }}
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-3">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-orange-500/10 text-orange-300 border border-orange-500/20">Laravel</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-sky-500/10 text-sky-300 border border-sky-500/20">Tailwind</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-blue-500/10 text-blue-300 border border-blue-500/20">MySQL</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-indigo-500/10 text-indigo-300 border border-indigo-500/20">ApexCharts</span>
                        </div>
                        <ul class="space-y-1 text-gray-400 text-xs sm:text-sm">
                                <li class="flex items-start gap-2">
                                    <span class="w-1 h-1 rounded-full bg-orange-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.elvoapp_v2.feature1') }}
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1 h-1 rounded-full bg-orange-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.elvoapp_v2.feature2') }}
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1 h-1 rounded-full bg-orange-400/60 mt-1.5 shrink-0"></span>
                                    {{ __('experience.elvoapp_v2.feature3') }}
                                </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- BOTTOM GRADIENT FADE -->
            <div class="absolute -bottom-10 left-0 right-0 h-20 bg-gradient-to-t from-surface to-transparent z-30 pointer-events-none"></div>

        </div>

    </div>

</section>
