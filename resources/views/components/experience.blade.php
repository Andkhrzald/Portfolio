<section id="experience" class="py-20 px-6 bg-[#020617] relative overflow-hidden">

    <div class="max-w-6xl mx-auto">

        <!-- TITLE -->
        <div class="mb-16 text-center">
            <p class="text-indigo-400 text-sm mb-2">EXPERIENCE</p>
            <h2 class="text-3xl font-bold">My journey</h2>
        </div>

        <!-- TIMELINE -->
        <div class="relative">

            <!-- ================= DESKTOP LINE ================= -->
            <div class="hidden md:block absolute top-10 left-1/2 -translate-x-1/2 w-screen h-[3px] z-10">

                <div class="absolute inset-0 bg-indigo-500/20"></div>

                <div class="absolute top-0 left-0 h-full w-[40%]
                    bg-gradient-to-r from-transparent via-indigo-400 to-transparent
                    blur-[3px]"
                    style="animation: glowX 2.5s linear infinite;">
                </div>

            </div>

            <!-- ================= MOBILE LINE ================= -->
            <div class="md:hidden absolute left-6 top-0 h-full w-[2px] z-20">

                <div class="absolute inset-0 bg-indigo-500/30"></div>

                <div class="absolute top-[-100%] left-0 w-full h-[200%] 
                    bg-gradient-to-b from-transparent via-indigo-400 to-transparent
                    blur-[2px]
                    animate-lineGlowY">
                </div>

            </div>

            <!-- ================= ITEMS ================= -->
            <div class="grid md:grid-cols-3 gap-16"> <!-- ✅ tambah gap -->

                @php
                    $exp = [
                        [
                            'year' => '2020 - 2021',
                            'title' => 'Computer Science Student',
                            'place' => 'Universitas Indonesia',
                            'icon' => '🎓'
                        ],
                        [
                            'year' => '2021 - 2023',
                            'title' => 'Web Developer Intern',
                            'place' => 'Tech Company Inc.',
                            'icon' => '💼'
                        ],
                        [
                            'year' => '2023 - Present',
                            'title' => 'Fullstack Developer',
                            'place' => 'Freelance',
                            'icon' => '🚀'
                        ],
                    ];
                @endphp

                @foreach ($exp as $item)
                <div class="relative group">

                    <!-- DOT -->
                    <div class="
                        absolute 
                        top-0 left-6 -translate-x-1/2   <!-- ✅ FIX MOBILE -->

                        md:top-10 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2  <!-- desktop tetap -->

                        w-12 h-12 flex items-center justify-center
                        rounded-full bg-[#0f172a] border border-indigo-500/30
                        shadow-[0_0_15px_rgba(99,102,241,0.4)]
                        group-hover:scale-110
                        group-hover:shadow-[0_0_25px_rgba(99,102,241,0.8)]
                        transition
                    ">
                        <span class="text-lg">{{ $item['icon'] }}</span>
                    </div>

                    <!-- CONTENT -->
                    <div class="
                        mt-16 md:mt-24 
                        pl-20 md:pl-0   <!-- ✅ FIX posisi -->
                        text-left md:text-center  <!-- ✅ FIX alignment -->
                    ">

                        <p class="text-indigo-400 text-sm mb-1">
                            {{ $item['year'] }}
                        </p>

                        <h3 class="font-semibold text-lg">
                            {{ $item['title'] }}
                        </h3>

                        <p class="text-gray-400 text-sm">
                            {{ $item['place'] }}
                        </p>

                    </div>

                </div>
                @endforeach

            </div>

        </div>

    </div>

</section>