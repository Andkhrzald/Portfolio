<section id="skills" class="py-12 sm:py-16 px-4 sm:px-6 bg-[#020617] relative overflow-hidden">

    <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/10 via-transparent to-transparent pointer-events-none"></div>

    <!-- TITLE -->
    <div class="max-w-7xl mx-auto mb-8 sm:mb-10">
        <p class="text-indigo-400 text-xs sm:text-sm mb-2 tracking-wider">{{ __('skills.section_label') }}</p>
        <h2 class="text-2xl sm:text-3xl font-bold">{{ __('skills.heading') }}</h2>
    </div>

    @php
        $skills = [
            ['name' => 'Laravel', 'img' => 'laravel.png'],
            ['name' => 'Python', 'img' => 'python.svg'],
            ['name' => 'Dart', 'img' => 'dart.svg'],
            ['name' => 'Flutter', 'img' => 'flutter.svg'],
            ['name' => 'MySQL', 'img' => 'mysql.svg'],
            ['name' => 'Github', 'img' => 'github.svg'],
            ['name' => 'javascript', 'img' => 'javascript.svg'],
        ];
    @endphp

    <!-- MARQUEE WRAPPER -->
    <div class="relative overflow-hidden">

        <!-- FADE KIRI -->
        <div class="absolute left-0 top-0 h-full w-12 sm:w-20 
                    bg-gradient-to-r from-[#020617] to-transparent z-10"></div>

        <!-- FADE KANAN -->
        <div class="absolute right-0 top-0 h-full w-12 sm:w-20 
                    bg-gradient-to-l from-[#020617] to-transparent z-10"></div>

        <!-- MARQUEE CONTENT (CSS continuous scroll) -->
        <div id="marquee" class="flex gap-3 sm:gap-4 w-max animate-marquee">

            @foreach ($skills as $skill)
            <div class="min-w-[100px] sm:min-w-[130px] group bg-[#0f172a] border border-white/5 rounded-xl p-3 sm:p-4 
                        flex flex-col items-center justify-center gap-1.5 sm:gap-2
                        hover:-translate-y-1.5 hover:scale-105
                        hover:border-indigo-500/30
                        hover:shadow-indigo-500/15 hover:shadow-md
                        transition duration-300 cursor-pointer">

                <img src="{{ asset('images/skills/' . $skill['img']) }}" 
                     class="w-6 h-6 sm:w-8 sm:h-8 object-contain
                            group-hover:scale-110 
                            group-hover:drop-shadow-[0_0_12px_rgba(99,102,241,0.8)]
                            transition duration-300">

                <p class="text-[11px] sm:text-xs text-gray-300 group-hover:text-white font-medium">
                    {{ $skill['name'] }}
                </p>

            </div>
            @endforeach

            <!-- DUPLICATE FOR SEAMLESS LOOP -->
            @foreach ($skills as $skill)
            <div class="min-w-[100px] sm:min-w-[130px] group bg-[#0f172a] border border-white/5 rounded-xl p-3 sm:p-4 
                        flex flex-col items-center justify-center gap-1.5 sm:gap-2
                        hover:-translate-y-1.5 hover:scale-105
                        hover:border-indigo-500/30
                        hover:shadow-indigo-500/15 hover:shadow-md
                        transition duration-300 cursor-pointer">

                <img src="{{ asset('images/skills/' . $skill['img']) }}" 
                     class="w-6 h-6 sm:w-8 sm:h-8 object-contain
                            group-hover:scale-110 
                            group-hover:drop-shadow-[0_0_12px_rgba(99,102,241,0.8)]
                            transition duration-300">

                <p class="text-[11px] sm:text-xs text-gray-300 group-hover:text-white font-medium">
                    {{ $skill['name'] }}
                </p>

            </div>
            @endforeach

        </div>

    </div>

</section>
