<section id="projects" class="relative py-20 sm:py-28 bg-[#0b1220] overflow-hidden">

    {{-- Background subtle glow --}}
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-600/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-purple-600/8 blur-[100px] rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        {{-- HEADER --}}
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-4 mb-12 sm:mb-16">
            <div class="reveal visible">
                <p class="text-indigo-400 text-xs sm:text-sm mb-2 tracking-[0.2em] font-medium">FEATURED WORK</p>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold">
                    Selected
                    <span class="bg-gradient-to-r from-indigo-400 to-purple-500 text-transparent bg-clip-text">
                        Projects
                    </span>
                </h2>
                <p class="text-gray-500 text-sm mt-2 max-w-md">
                    Crafted with Laravel, Flutter, and modern web technologies
                </p>
            </div>

            <a href="{{ route('projects.index') }}"
               class="group self-start sm:self-auto inline-flex items-center gap-2
                      border border-indigo-500/25 px-5 py-2.5 rounded-full text-sm
                      hover:bg-indigo-500/10 hover:border-indigo-500/50 transition text-gray-300 hover:text-white">
                View All Projects
                <span class="arrow-animate">&rarr;</span>
            </a>
        </div>

        {{-- GRID --}}
        @php
        $projects = [
            [
                'title' => 'ELVOAPP V2',
                'slug' => 'elvoapp-v2',
                'desc' => 'Task management application built with Laravel and Tailwind CSS.',
                'img' => 'ElvoDashboard.png',
                'tech' => ['Laravel', 'Tailwind', 'MySQL']
            ],
            [
                'title' => 'Harmoni Nusantara',
                'slug' => 'harmoni-nusantara',
                'desc' => 'Cultural platform showcasing Indonesian heritage and arts.',
                'img' => 'DashboardHarmoni.png',
                'tech' => ['Laravel', 'Blade', 'Tailwind', 'MySQL']
            ],
            [
                'title' => 'ELVOAPP',
                'slug' => 'elvoapp',
                'desc' => 'Cross-platform mobile application built with Flutter and Dart.',
                'img' => 'project3.png',
                'tech' => ['Flutter', 'Dart', 'API']
            ],
        ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

            @foreach ($projects as $project)
            <a href="{{ route('projects.show', $project['slug']) }}"
               class="project-card group bg-[#0f172a]/80 backdrop-blur-sm rounded-2xl overflow-hidden block
                      border border-white/[0.06] relative">

                {{-- Glow border overlay --}}
                <div class="project-card-glow"></div>

                {{-- Image --}}
                <div class="card-image-wrapper">
                    <img src="{{ asset('images/projects/' . $project['img']) }}"
                         onerror="this.style.display='none'; this.parentElement.classList.add('flex','items-center','justify-center','h-40','sm:h-48'); this.parentElement.innerHTML='<span class=\'text-indigo-400 text-base sm:text-lg font-semibold\'>{{ $project['title'] }}</span>'"
                         class="w-full h-40 sm:h-48 object-cover transition duration-500 group-hover:scale-105"
                         alt="{{ $project['title'] }}">

                    {{-- View badge --}}
                    <span class="view-project-badge">
                        View Project &rarr;
                    </span>
                </div>

                {{-- Content --}}
                <div class="p-5 sm:p-6 relative z-10">
                    <h3 class="text-base sm:text-lg font-semibold text-white mb-2 group-hover:text-indigo-400 transition-colors">
                        {{ $project['title'] }}
                    </h3>

                    <p class="text-xs sm:text-sm text-gray-400 mb-4 leading-relaxed line-clamp-2">
                        {{ $project['desc'] }}
                    </p>

                    <div class="flex flex-wrap gap-1.5 sm:gap-2">
                        @foreach ($project['tech'] as $tech)
                            @php
                                $colors = [
                                    'Laravel' => 'bg-orange-500/10 text-orange-400 border-orange-500/20',
                                    'Tailwind' => 'bg-sky-500/10 text-sky-400 border-sky-500/20',
                                    'MySQL' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
                                    'Midtrans' => 'bg-purple-500/10 text-purple-400 border-purple-500/20',
                                    'Flutter' => 'bg-sky-500/10 text-sky-400 border-sky-500/20',
                                    'Dart' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
                                    'API' => 'bg-indigo-500/10 text-indigo-400 border-indigo-500/20',
                                ];
                            @endphp
                            <span class="text-[10px] sm:text-xs px-2.5 py-1 rounded-full border
                                         {{ $colors[$tech] ?? 'bg-gray-500/10 text-gray-400 border-gray-500/20' }}
                                         transition hover:shadow-lg">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>

            </a>
            @endforeach

        </div>

    </div>
</section>
