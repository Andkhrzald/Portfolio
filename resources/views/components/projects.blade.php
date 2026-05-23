<section id="projects" class="py-16 sm:py-20 bg-[#0b1220]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- HEADER -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-10 sm:mb-12">
            <div>
                <p class="text-indigo-400 text-xs sm:text-sm mb-2 tracking-wider">MY PROJECTS</p>
                <h2 class="text-2xl sm:text-3xl font-bold">Some of my recent work</h2>
            </div>

            <a href="#" 
               class="self-start sm:self-auto border border-indigo-500/30 px-4 py-2 rounded-lg text-xs sm:text-sm 
                      hover:bg-indigo-500/10 transition text-center">
                View All Projects
            </a>
        </div>

        <!-- GRID -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

            @php
            $projects = [
                [
                    'title' => 'Task Management App',
                    'desc' => 'A simple task management application built with Laravel and Tailwind CSS.',
                    'img' => 'adminDashboard.png',
                    'tech' => ['Laravel', 'Tailwind', 'MySQL']
                ],
                [
                    'title' => 'E-Commerce Website',
                    'desc' => 'Modern e-commerce website with cart, checkout, and payment integration.',
                    'img' => 'project2.png',
                    'tech' => ['Laravel', 'Tailwind', 'Midtrans']
                ],
                [
                    'title' => 'Mobile Banking App',
                    'desc' => 'Cross-platform mobile banking application built with Flutter and Dart.',
                    'img' => 'project3.png',
                    'tech' => ['Flutter', 'Dart', 'API']
                ],
            ];
            @endphp

            @foreach ($projects as $project)
            <div class="group bg-[#0f172a] rounded-2xl overflow-hidden 
                        border border-white/5 
                        hover:border-indigo-500/30
                        hover:shadow-indigo-500/20 hover:shadow-lg
                        transition duration-300">

                <!-- IMAGE -->
                <div class="relative overflow-hidden bg-gradient-to-br from-indigo-900/50 to-purple-900/50">
                    <img src="{{ asset('images/projects/' . $project['img']) }}" 
                         onerror="this.style.display='none'; this.parentElement.classList.add('flex','items-center','justify-center','h-40','sm:h-48'); this.parentElement.innerHTML='<span class=\'text-indigo-400 text-base sm:text-lg font-semibold\'>'+this.alt+'</span>'"
                         class="w-full h-40 sm:h-48 object-cover 
                                group-hover:scale-105 transition duration-300">

                    <!-- ICON BUTTON -->
                    <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition">
                        <div class="bg-[#0f172a] border border-white/5 rounded-2xl overflow-hidden 
                                    hover:border-indigo-500/40 
                                    hover:shadow-indigo-500/20 hover:shadow-lg 
                                    hover:-translate-y-1 hover:scale-[1.02]
                                    transition duration-300 group">
                            🔗
                        </div>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="p-4 sm:p-5">

                    <h3 class="text-base sm:text-lg font-semibold mb-2">
                        {{ $project['title'] }}
                    </h3>

                    <p class="text-xs sm:text-sm text-gray-400 mb-4 leading-relaxed">
                        {{ $project['desc'] }}
                    </p>

                    <!-- TECH TAG -->
                    <div class="flex flex-wrap gap-1.5 sm:gap-2">

                        @foreach ($project['tech'] as $tech)

                            @php
                                $colors = [
                                    'Laravel' => 'bg-orange-500/10 text-orange-400 border border-orange-500/20',
                                    'Tailwind' => 'bg-sky-500/10 text-sky-400 border border-sky-500/20',
                                    'MySQL' => 'bg-blue-500/10 text-blue-400 border border-blue-500/20',
                                    'Midtrans' => 'bg-purple-500/10 text-purple-400 border border-purple-500/20',
                                    'Flutter' => 'bg-sky-500/10 text-sky-400 border border-sky-500/20',
                                    'Dart' => 'bg-blue-500/10 text-blue-400 border border-blue-500/20',
                                    'API' => 'bg-indigo-500/10 text-indigo-400 border border-indigo-500/20',
                                ];
                            @endphp

                            <span class="text-[10px] sm:text-xs px-2 sm:px-3 py-0.5 sm:py-1 rounded-full 
                                        {{ $colors[$tech] ?? 'bg-gray-500/10 text-gray-400 border border-gray-500/20' }}
                                        hover:shadow-lg transition">
                                {{ $tech }}
                            </span>

                        @endforeach

                    </div>

                </div>

            </div>
            @endforeach

        </div>

    </div>

</section>
