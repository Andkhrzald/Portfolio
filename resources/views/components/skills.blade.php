<section id="skills" class="py-20 px-6 bg-[#020617]">

    <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/10 via-transparent to-transparent pointer-events-none"></div>

    <!-- TITLE -->
    <div class="mb-12">
        <p class="text-indigo-400 text-sm mb-2">MY SKILLS</p>
        <h2 class="text-3xl font-bold">Technologies I use</h2>
    </div>

    <!-- GRID -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">

        <!-- ITEM -->
        @php
            $skills = [
                ['name' => 'Laravel', 'img' => 'laravel.png'],
                ['name' => 'Python', 'img' => 'python.svg'],
                ['name' => 'Dart', 'img' => 'dart.svg'],
                ['name' => 'Flutter', 'img' => 'flutter.svg'],
                ['name' => 'MySQL', 'img' => 'mysql.svg'],
                ['name' => 'Github', 'img' => 'github.svg'],
            ];
        @endphp

        @foreach ($skills as $skill)
        <div class="group bg-[#0f172a] border border-white/5 rounded-2xl p-6 
                    flex flex-col items-center justify-center
                    hover:-translate-y-2 hover:border-indigo-500/40
                    hover:shadow-indigo-500/20 hover:shadow-lg
                    transition duration-300 cursor-pointer">

            <img 
                src="{{ asset('images/skills/' . $skill['img']) }}" 
                class="w-10 h-10 mb-4 object-contain 
                    group-hover:scale-110 
                    group-hover:drop-shadow-[0_0_10px_rgba(99,102,241,0.7)]
                    transition">

            <p class="text-sm text-gray-300 group-hover:text-white">
                {{ $skill['name'] }}
            </p>

        </div>
        @endforeach

    </div>

</section>