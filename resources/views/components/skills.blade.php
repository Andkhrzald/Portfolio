<section id="skills" class="py-20 px-6 bg-[#020617] relative">

    <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/10 via-transparent to-transparent pointer-events-none"></div>

    <!-- TITLE -->
    <div class="mb-12">
        <p class="text-indigo-400 text-sm mb-2">MY SKILLS</p>
        <h2 class="text-3xl font-bold">Technologies I use</h2>
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
        <div class="absolute left-0 top-0 h-full w-20 
                    bg-gradient-to-r from-[#020617] to-transparent z-10"></div>

        <!-- FADE KANAN -->
        <div class="absolute right-0 top-0 h-full w-20 
                    bg-gradient-to-l from-[#020617] to-transparent z-10"></div>

        <!-- MARQUEE CONTENT -->
        <div id="marquee" class="flex gap-6 w-max transition-transform">x`

            <!-- LOOP 1 -->
            @foreach ($skills as $skill)
            <div class="min-w-[180px] group bg-[#0f172a] border border-white/5 rounded-2xl p-6 
                        flex flex-col items-center justify-center
                        hover:-translate-y-2 hover:scale-105
                        hover:border-indigo-500/40
                        hover:shadow-indigo-500/30 hover:shadow-lg
                        transition duration-300 cursor-pointer">

                <img 
                    src="{{ asset('images/skills/' . $skill['img']) }}" 
                    class="w-10 h-10 mb-4 object-contain 
                        grayscale opacity-70
                        group-hover:grayscale-0 group-hover:opacity-100
                        group-hover:scale-110 
                        group-hover:drop-shadow-[0_0_15px_rgba(99,102,241,0.9)]
                        transition duration-300">

                <p class="text-sm text-gray-300 group-hover:text-white">
                    {{ $skill['name'] }}
                </p>

            </div>
            @endforeach

            <!-- DUPLICATE -->
            @foreach ($skills as $skill)
            <div class="min-w-[180px] group relative bg-[#0f172a] border border-white/5 rounded-2xl p-6 
                        flex flex-col items-center justify-center
                        hover:-translate-y-2 hover:scale-105
                        hover:border-indigo-500/40
                        hover:shadow-indigo-500/30 hover:shadow-lg
                        transition duration-300 cursor-pointer">

            <div class="absolute left-1/2 -bottom-1 w-2 h-2 bg-indigo-500 rotate-45 -translate-x-1/2 
                        px-3 py-1 text-xs rounded-md
                        bg-indigo-500 text-white
                        opacity-0 translate-y-2
                        group-hover:opacity-100 group-hover:translate-y-0
                        transition duration-300 pointer-events-none whitespace-nowrap">

                {{ $skill['name'] }}

            </div>

                <img 
                    src="{{ asset('images/skills/' . $skill['img']) }}" 
                    class="w-10 h-10 mb-4 object-contain 
                           group-hover:scale-110 
                           group-hover:drop-shadow-[0_0_15px_rgba(99,102,241,0.9)]
                           transition">

                <p class="text-sm text-gray-300 group-hover:text-white">
                    {{ $skill['name'] }}
                </p>

            </div>
            @endforeach

        </div>

    </div>

</section>