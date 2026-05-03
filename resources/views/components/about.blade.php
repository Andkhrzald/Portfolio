<section id="about" class="py-20 px-20 bg-[#0b1220] bg-gradient-to-r from-[#0b1220] via-[#0b1220] to-[#020617]">
    

    <div class="grid md:grid-cols-2 gap-12 items-center">

        <!-- LEFT IMAGE -->
        <div class="relative">
            <img 
                src="{{ asset('images/about/about1.jpg') }}" 
                class="rounded-2xl w-[85%] shadow-lg translate-x-20">

            <!-- DOT DECORATION -->
            <div class="absolute -left-6 top-10 grid grid-cols-3 gap-2 opacity-40 ">
                @for ($i = 0; $i < 9; $i++)
                    <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                @endfor
            </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div>
            <p class="text-indigo-400 text-sm mb-2">ABOUT ME</p>

            <h2 class="text-3xl font-bold mb-4">
                Get to know me
            </h2>

            <p class="text-gray-400 leading-relaxed mb-6">
                Saya adalah developer yang fokus pada Laravel, Flutter, dan UI modern. 
                Saya suka membangun aplikasi yang clean, scalable, dan user-friendly.
            </p>

            <!-- INFO BOX -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6">

             <!-- NAME -->
            <div class="flex items-center gap-3">

                <div class="bg-indigo-500/20 p-3 rounded-lg">
                    👤
                </div>

                <div>
                    <p class="text-xs text-gray-400">Name</p>
                    <p class="text-sm font-medium">Andika Rizaldi</p>
                </div>
            </div>

            <!-- EMAIL -->
            <div class="flex items-center gap-3">

                <div class="bg-indigo-500/20 p-3 rounded-lg">
                    ✉️
                </div>

                <div>
                    <p class="text-xs text-gray-400">Email</p>
                    <p class="text-sm font-medium">andika@email.com </p>
                </div>
            </div>

            <!-- LOCATION -->
            <div class="flex items-center gap-3">

                <div class="bg-indigo-500/20 p-3 rounded-lg">
                    📍
                </div>

                <div>
                    <p class="text-xs text-gray-400">Location</p>
                    <p class="text-sm font-medium">Indonesia</p>
                </div>
            </div>

</div>

        </div>

    </div>

</section>