<nav id="navbar" class="fixed top-4 left-1/2 -translate-x-1/2 
            w-[90%] max-w-5xl mx-auto
            bg-[#0B0F1A]/80 backdrop-blur-md 
            border border-white/10 
            rounded-2xl 
            shadow-lg shadow-black/30 shadow-indigo-500/10
            z-50 transition-all duration-300">

    <div class="flex justify-between items-center px-6 py-4">
        
        <!-- LOGO -->
        <h1 class="font-bold text-lg">Andika.dev</h1>

        <!-- DESKTOP MENU -->
        <ul class="hidden md:flex gap-8 text-sm text-gray-300">

            <li>
                <a href="#about" class="relative group hover:text-white">
                    About
                    <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-indigo-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>

            <li>
                <a href="#projects" class="relative group hover:text-white">
                    Projects
                    <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-indigo-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>

            <li>
                <a href="#contact" class="relative group hover:text-white">
                    Contact
                    <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-indigo-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>

        </ul>

        <!-- BUTTON -->
        <a href="#" 
           class="hidden md:block bg-indigo-500 px-4 py-2 rounded-lg text-sm 
                  hover:bg-indigo-600 transition">
            Download CV
        </a>

        <!-- HAMBURGER -->
        <button id="menu-btn" class="md:hidden flex flex-col gap-1.5">
            <span class="w-6 h-[2px] bg-white transition-all"></span>
            <span class="w-6 h-[2px] bg-white transition-all"></span>
            <span class="w-6 h-[2px] bg-white transition-all"></span>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" 
         class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">

        <div class="flex flex-col gap-4 px-6 pb-6 text-gray-300">

            <a href="#about" class="hover:text-white">About</a>
            <a href="#projects" class="hover:text-white">Projects</a>
            <a href="#contact" class="hover:text-white">Contact</a>

            <a href="#" 
               class="bg-indigo-500 px-4 py-2 rounded-lg text-sm text-center 
                      hover:bg-indigo-600 transition">
                Download CV
            </a>

        </div>
    </div>

</nav>