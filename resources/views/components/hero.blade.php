<section class="relative min-h-screen flex items-center overflow-hidden bg-[#070B1A]">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-to-r from-[#070B1A] via-[#0A0F2A] to-[#12163C]"></div>

        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2
            w-[800px] h-[800px] bg-indigo-600/20 blur-[160px] rounded-full">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 w-full">
        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- TEXT -->
            <div>

                <div class="animate-fade-up delay-100 inline-block px-4 py-1 mb-4 
                    bg-indigo-500/10 border border-indigo-500/20 
                    text-indigo-400 rounded-full text-sm">
                    Hello, I'm 👋
                </div>

                <h1 class="animate-fade-up delay-200 text-5xl md:text-6xl font-bold mb-4 leading-tight">
                    Andika 
                    <span class="bg-gradient-to-r from-indigo-400 to-purple-500 
                    text-transparent bg-clip-text">
                        Rizaldi
                    </span>
                </h1>

                <h2 class="animate-fade-up delay-300 text-xl md:text-2xl font-semibold mb-4 text-white">
                    Fullstack Developer
                </h2>

                <p class="animate-fade-up delay-400 text-gray-400 mb-8 max-w-lg">
                    I build modern, responsive, and scalable web applications 
                    with clean code and great user experience.
                </p>

                <div class="flex gap-4 animate-fade-up delay-500">
                    <a href="#projects" 
                       class="px-6 py-3 rounded-xl 
                       bg-gradient-to-r from-indigo-500 to-purple-500
                       hover:opacity-90
                       shadow-lg shadow-indigo-500/30
                       transition">
                       View My Work →
                    </a>

                    <a href="#contact" 
                       class="px-6 py-3 rounded-xl 
                       border border-indigo-400/30 
                       text-white
                       hover:bg-indigo-500/10 transition">
                       Contact Me ✉
                    </a>
                </div>

                <!-- SOCIAL -->
                <div class="mt-10 animate-fade-up delay-500">
                    <p class="text-gray-400 text-sm mb-4 tracking-wide">
                        Follow me on
                    </p>

                    <div class="flex gap-5">
                        <a href="#" class="group relative w-12 h-12 flex items-center justify-center hover:scale-110 transition">
                            <div class="absolute inset-0 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10
                                shadow-[0_10px_30px_rgba(0,0,0,0.4)] 
                                group-hover:border-indigo-400/60 
                                group-hover:shadow-[0_0_25px_rgba(99,102,241,0.6)]"></div>
                            <i class="fa-brands fa-github relative text-gray-300 group-hover:text-white"></i>
                        </a>

                        <a href="#" class="group relative w-12 h-12 flex items-center justify-center hover:scale-110 transition">
                            <div class="absolute inset-0 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10
                                shadow-[0_10px_30px_rgba(0,0,0,0.4)] 
                                group-hover:border-indigo-400/60 
                                group-hover:shadow-[0_0_25px_rgba(99,102,241,0.6)]"></div>
                            <i class="fa-brands fa-linkedin relative text-gray-300 group-hover:text-white"></i>
                        </a>

                        <a href="#" class="group relative w-12 h-12 flex items-center justify-center hover:scale-110 transition">
                            <div class="absolute inset-0 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10
                                shadow-[0_10px_30px_rgba(0,0,0,0.4)] 
                                group-hover:border-indigo-400/60 
                                group-hover:shadow-[0_0_25px_rgba(99,102,241,0.6)]"></div>
                            <i class="fa-brands fa-instagram relative text-gray-300 group-hover:text-white"></i>
                        </a>

                        <a href="#" class="group relative w-12 h-12 flex items-center justify-center scale-105">
                            <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-500 opacity-30 blur-md"></div>
                            <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-indigo-500/40 to-purple-500/40
                                backdrop-blur-xl border border-indigo-400/40
                                shadow-[0_0_25px_rgba(139,92,246,0.6)]"></div>
                            <i class="fa-solid fa-envelope relative text-white"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- IMAGE (UPDATED 3D) -->
            <div class="relative flex justify-center items-center perspective">

                <!-- GLOW -->
                <div class="absolute w-[600px] h-[600px] 
                    bg-gradient-to-r from-indigo-500/20 to-purple-500/20 
                    blur-[140px] rounded-full">
                </div>

                <!-- 3D WRAPPER -->
                <div id="card-3d" class="relative z-10 transition-transform duration-200 ease-out">

                    <img 
                        src="{{ asset('images/profile/andikha.png') }}" 
                        class="w-[380px] md:w-[450px] 
                        object-contain 
                        drop-shadow-[0_0_60px_rgba(99,102,241,0.6)]">
                </div>

            </div>

        </div>
    </div>

    <!-- PARTICLES -->
    <div class="absolute top-20 left-10 w-2 h-2 bg-indigo-400 rounded-full animate-ping"></div>
    <div class="absolute bottom-20 right-20 w-2 h-2 bg-purple-400 rounded-full animate-ping"></div>

    <!-- CURSOR SPOTLIGHT -->
    <div id="cursor-light"
        class="pointer-events-none fixed inset-0 z-0 opacity-40">
    </div>

</section>