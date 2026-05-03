<section id="projects" class="py-20 bg-[#0b1220]">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-12">
            <div>
                <p class="text-indigo-400 text-sm mb-2">MY PROJECTS</p>
                <h2 class="text-3xl font-bold">Some of my recent work</h2>
            </div>

            <a href="#" 
               class="border border-indigo-500/30 px-4 py-2 rounded-lg text-sm 
                      hover:bg-indigo-500/10 transition">
                View All Projects
            </a>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-8">

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
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/projects/' . $project['img']) }}" 
                         class="w-full h-48 object-cover 
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
                <div class="p-5">

                    <h3 class="text-lg font-semibold mb-2">
                        {{ $project['title'] }}
                    </h3>

                    <p class="text-sm text-gray-400 mb-4 leading-relaxed">
                        {{ $project['desc'] }}
                    </p>

                    <!-- TECH TAG -->
                    <div class="flex flex-wrap gap-2">

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

                            <span class="text-xs px-3 py-1 rounded-full 
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