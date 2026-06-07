<section class="relative min-h-screen flex items-center overflow-hidden bg-surface">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface-light to-surface-light"></div>

        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2
            w-[800px] h-[800px] bg-indigo-600/20 blur-[160px] rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
        <div class="grid md:grid-cols-2 gap-8 md:gap-16 items-center pt-24 md:pt-0">

            <!-- TEXT -->
            <div class="order-2 md:order-1 text-center md:text-left">

                <div class="animate-fade-up delay-100 inline-block px-4 py-1 mb-4 
                    bg-indigo-500/10 border border-indigo-500/20 
                    text-indigo-400 rounded-full text-xs sm:text-sm">
                    {{ __('hero.greeting') }}
                </div>

                <h1 class="animate-fade-up delay-200 text-4xl sm:text-5xl md:text-6xl font-bold mb-4 leading-tight">
                    Andika 
                    <span class="bg-gradient-to-r from-indigo-400 to-purple-500 
                    text-transparent bg-clip-text">
                        Rizaldi
                    </span>
                </h1>

                <h2 class="animate-fade-up delay-300 text-lg sm:text-xl md:text-2xl font-semibold mb-4 text-white">
                    {{ __('hero.title') }}
                </h2>

                <p class="animate-fade-up delay-400 text-gray-400 mb-8 max-w-lg mx-auto md:mx-0 text-sm sm:text-base">
                    {{ __('hero.description') }}
                </p>

                <div class="flex gap-3 sm:gap-4 animate-fade-up delay-500 justify-center md:justify-start flex-wrap">
                    <a href="#projects" 
                       class="px-5 sm:px-6 py-2.5 sm:py-3 rounded-xl text-sm sm:text-base
                       bg-gradient-to-r from-indigo-500 to-purple-500
                       hover:opacity-90
                       shadow-lg shadow-indigo-500/30
                       transition">
                       {{ __('hero.view_work') }} →
                    </a>

                    <a href="#contact" 
                       class="px-5 sm:px-6 py-2.5 sm:py-3 rounded-xl text-sm sm:text-base
                       border border-indigo-400/30 
                       text-white
                       hover:bg-indigo-500/10 transition">
                       {{ __('hero.contact_me') }} ✉
                    </a>
                </div>

                <!-- SOCIAL -->
                <div class="mt-8 sm:mt-10 animate-fade-up delay-500">
                    <p class="text-gray-400 text-xs sm:text-sm mb-3 sm:mb-4 tracking-wide">
                        {{ __('hero.follow_me') }}
                    </p>

                    <div class="flex gap-4 sm:gap-5 justify-center md:justify-start">
                        <a href="https://github.com/Andkhrzald" target="_blank" class="group relative w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center hover:scale-110 transition">
                            <div class="absolute inset-0 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10
                                shadow-[0_10px_30px_rgba(0,0,0,0.4)] 
                                group-hover:border-indigo-400/60 
                                group-hover:shadow-[0_0_25px_rgba(99,102,241,0.6)]"></div>
                            <i class="fa-brands fa-github relative text-gray-300 group-hover:text-white text-sm sm:text-base"></i>
                        </a>

                        <a href="https://www.linkedin.com/in/andikha-rizaldi-a85245411" target="_blank" class="group relative w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center hover:scale-110 transition">
                            <div class="absolute inset-0 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10
                                shadow-[0_10px_30px_rgba(0,0,0,0.4)] 
                                group-hover:border-sky-400/60 
                                group-hover:shadow-[0_0_25px_rgba(56,189,248,0.6)]"></div>
                            <i class="fa-brands fa-linkedin relative text-gray-300 group-hover:text-white text-sm sm:text-base"></i>
                        </a>

                        <a href="https://www.instagram.com/andkhrzal_/" target="_blank" class="group relative w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center hover:scale-110 transition">
                            <div class="absolute inset-0 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10
                                shadow-[0_10px_30px_rgba(0,0,0,0.4)] 
                                group-hover:border-indigo-400/60 
                                group-hover:shadow-[0_0_25px_rgba(99,102,241,0.6)]"></div>
                            <i class="fa-brands fa-instagram relative text-gray-300 group-hover:text-white text-sm sm:text-base"></i>
                        </a>

                        <a href="#" class="group relative w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center hover:scale-110 transition">
                            <div class="absolute inset-0 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10
                                shadow-[0_10px_30px_rgba(0,0,0,0.4)]
                                group-hover:border-indigo-400/60
                                group-hover:shadow-[0_0_25px_rgba(99,102,241,0.6)]"></div>
                            <i class="fa-solid fa-envelope relative text-gray-300 group-hover:text-white text-sm sm:text-base"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- IMAGE SECTION (RIGHT) -->
            <div class="order-1 md:order-2 relative flex justify-center items-center min-h-[350px] sm:min-h-[420px] md:min-h-[500px]">

                <!-- LAYERED GLOW BACKGROUND -->
                <div class="absolute w-[400px] sm:w-[550px] h-[400px] sm:h-[550px] bg-gradient-to-r from-indigo-500/15 to-purple-500/15 blur-[120px] sm:blur-[140px] rounded-full animate-pulse-soft"></div>
                <div class="absolute w-[250px] sm:w-[350px] h-[250px] sm:h-[350px] bg-purple-500/10 blur-[80px] sm:blur-[100px] rounded-full translate-x-12 sm:translate-x-20 -translate-y-8 sm:-translate-y-10"></div>
                <div class="absolute w-[180px] sm:w-[250px] h-[180px] sm:h-[250px] bg-pink-500/10 blur-[60px] sm:blur-[80px] rounded-full -translate-x-10 sm:-translate-x-16 translate-y-10 sm:translate-y-16"></div>

                <!-- DECORATIVE GEOMETRIC SHAPES (hidden on very small screens) -->
                <div class="hidden sm:block absolute top-8 right-0 md:top-10 md:right-5 w-16 h-16 md:w-20 md:h-20 border border-indigo-400/20 rounded-lg animate-float-slow opacity-30"></div>
                <div class="hidden sm:block absolute bottom-20 left-0 w-24 h-24 md:w-32 md:h-32 border border-purple-400/10 rounded-full opacity-20"></div>
                <div class="absolute top-36 left-0 sm:-left-3 w-3 h-3 md:w-4 md:h-4 bg-indigo-400 rounded-full animate-pulse-soft" style="animation-delay: 1s"></div>
                <div class="absolute -bottom-1 right-8 sm:right-16 w-2 h-2 md:w-3 md:h-3 bg-purple-400 rounded-full animate-pulse-soft" style="animation-delay: 2s"></div>
                <div class="hidden sm:block absolute top-1/2 -right-2 w-1.5 h-12 md:w-2 md:h-16 bg-gradient-to-b from-indigo-500/30 to-purple-500/30 rounded-full"></div>

                <!-- ORBITAL RINGS (DESKTOP ONLY) -->
                <div class="hidden md:block absolute w-[480px] h-[480px] rounded-full border border-indigo-500/10 animate-orbit">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-indigo-400 rounded-full shadow-lg shadow-indigo-500/60"></div>
                </div>
                <div class="hidden md:block absolute w-[420px] h-[420px] rounded-full border border-purple-500/10 animate-orbit-reverse">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-purple-400 rounded-full shadow-lg shadow-purple-500/60"></div>
                </div>

                <!-- TECH FLOATING BADGES (hidden on very small screens) -->
                <div class="hidden sm:block absolute top-6 right-2 md:top-8 md:right-8 z-20 animate-float-badge" style="animation-delay: 0s">
                    <div class="bg-[#0f172a]/90 backdrop-blur-xl border border-white/10 rounded-xl px-2.5 py-2 md:px-3 shadow-xl shadow-black/40 flex items-center gap-2 hover:border-orange-500/40 hover:shadow-orange-500/10 transition duration-300">
                        <img src="{{ asset('images/skills/laravel.png') }}" class="w-4 h-4 md:w-5 md:h-5 object-contain" alt="Laravel">
                        <span class="text-xs text-gray-300 font-medium hidden sm:inline">Laravel</span>
                    </div>
                </div>

                <div class="hidden sm:block absolute top-20 -right-6 md:top-24 md:-right-4 z-20 animate-float-badge" style="animation-delay: 0.8s">
                    <div class="bg-[#0f172a]/90 backdrop-blur-xl border border-white/10 rounded-xl px-2.5 py-2 md:px-3 shadow-xl shadow-black/40 flex items-center gap-2 hover:border-sky-500/40 hover:shadow-sky-500/10 transition duration-300">
                        <img src="{{ asset('images/skills/flutter.svg') }}" class="w-4 h-4 md:w-5 md:h-5 object-contain" alt="Flutter">
                        <span class="text-xs text-gray-300 font-medium hidden sm:inline">Flutter</span>
                    </div>
                </div>

                <div class="hidden sm:block absolute bottom-24 -left-8 md:bottom-20 md:-left-5 z-20 animate-float-badge" style="animation-delay: 1.6s">
                    <div class="bg-[#0f172a]/90 backdrop-blur-xl border border-white/10 rounded-xl px-2.5 py-2 md:px-3 shadow-xl shadow-black/40 flex items-center gap-2 hover:border-yellow-500/40 hover:shadow-yellow-500/10 transition duration-300">
                        <img src="{{ asset('images/skills/python.svg') }}" class="w-4 h-4 md:w-5 md:h-5 object-contain" alt="Python">
                        <span class="text-xs text-gray-300 font-medium hidden sm:inline">Python</span>
                    </div>
                </div>

                <!-- MAIN PHOTO CARD -->
                <div id="card-3d" class="relative z-10">

                    <!-- GLASS CARD BACKDROP -->
                    <div class="absolute -inset-4 sm:-inset-5 md:-inset-6 rounded-full bg-gradient-to-br from-white/[0.04] to-transparent backdrop-blur-2xl border border-white/[0.06] shadow-2xl shadow-black/40"></div>

                    <!-- GRADIENT BORDER WRAPPER -->
                    <div class="relative rounded-full p-[3px] animate-gradient-move shadow-2xl shadow-indigo-500/30 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500">

                        <!-- IMAGE CONTAINER -->
                        <div class="rounded-full overflow-hidden w-[240px] h-[240px] sm:w-[300px] sm:h-[300px] md:w-[400px] md:h-[400px] bg-surface">
                            <img id="hero-img"
                                src="{{ asset('images/profile/saya.png') }}" 
                                alt="Andika Rizaldi"
                                class="w-full h-full object-cover object-[center_35%]">
                        </div>

                    </div>

                    <!-- INNER GLOW RING -->
                    <div class="absolute inset-0 rounded-full ring-1 ring-white/10 shadow-[inset_0_0_60px_rgba(99,102,241,0.2)] pointer-events-none"></div>

                    <!-- STATUS BADGE -->
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 z-30 
                        bg-[#0f172a]/90 backdrop-blur-xl border border-emerald-500/30 rounded-full pl-2 pr-3 md:pr-4 py-1
                        shadow-lg shadow-emerald-500/10 flex items-center gap-2 whitespace-nowrap">
                        <span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-emerald-400 rounded-full animate-ping opacity-75"></span>
                        <span class="text-[10px] md:text-xs text-emerald-300 font-medium">{{ __('hero.available') }}</span>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- CURSOR SPOTLIGHT -->
    <div id="cursor-light"
        class="pointer-events-none fixed inset-0 z-0 opacity-30 sm:opacity-40">
    </div>

</section>
