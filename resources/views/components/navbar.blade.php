<nav id="navbar" class="fixed top-0 left-0 w-full
            bg-[#0B0F1A]/80 backdrop-blur-md 
            border-b border-white/10
            shadow-lg shadow-black/30
            z-50 transition-all duration-300">

    <div class="max-w-7xl mx-auto flex justify-between items-center px-4 sm:px-6 py-3">

        <!-- LOGO -->
        <h1 class="font-bold text-lg md:text-xl">Andika.dev</h1>

        <!-- DESKTOP MENU -->
        <ul class="hidden md:flex items-center gap-1 text-sm text-gray-300">

            <li>
                <a href="#about" class="px-3 py-2 rounded-lg hover:text-white hover:bg-white/5 transition relative group">
                    About
                    <span class="absolute left-3 right-3 -bottom-0.5 h-[2px] bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </li>
            <li>
                <a href="#skills" class="px-3 py-2 rounded-lg hover:text-white hover:bg-white/5 transition relative group">
                    Skills
                    <span class="absolute left-3 right-3 -bottom-0.5 h-[2px] bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </li>
            <li>
                <a href="#experience" class="px-3 py-2 rounded-lg hover:text-white hover:bg-white/5 transition relative group">
                    Experience
                    <span class="absolute left-3 right-3 -bottom-0.5 h-[2px] bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </li>
            <li>
                <a href="#projects" class="px-3 py-2 rounded-lg hover:text-white hover:bg-white/5 transition relative group">
                    Projects
                    <span class="absolute left-3 right-3 -bottom-0.5 h-[2px] bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </li>
            <li>
                <a href="#contact" class="px-3 py-2 rounded-lg hover:text-white hover:bg-white/5 transition relative group">
                    Contact
                    <span class="absolute left-3 right-3 -bottom-0.5 h-[2px] bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </li>

        </ul>

        <!-- HIRE ME DESKTOP -->
        <a href="#contact" 
           class="hidden md:inline-flex bg-indigo-500 px-4 py-2 rounded-lg text-sm font-medium
                  hover:bg-indigo-600 transition shadow-lg shadow-indigo-500/25">
            Hire Me
        </a>

        <!-- HAMBURGER -->
        <button id="menu-btn" aria-label="Toggle menu" class="md:hidden flex flex-col gap-1.5 p-2 -mr-2 min-w-[44px] min-h-[44px] items-center justify-center">
            <span class="w-6 h-[2px] bg-white transition-all duration-300"></span>
            <span class="w-6 h-[2px] bg-white transition-all duration-300"></span>
            <span class="w-6 h-[2px] bg-white transition-all duration-300"></span>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" 
         class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out border-t border-white/5">

        <div class="flex flex-col gap-1 px-4 sm:px-6 pb-5 pt-3 text-gray-300">

            <a href="#about" class="px-4 py-3 rounded-xl hover:text-white hover:bg-white/5 transition text-sm">About</a>
            <a href="#skills" class="px-4 py-3 rounded-xl hover:text-white hover:bg-white/5 transition text-sm">Skills</a>
            <a href="#experience" class="px-4 py-3 rounded-xl hover:text-white hover:bg-white/5 transition text-sm">Experience</a>
            <a href="#projects" class="px-4 py-3 rounded-xl hover:text-white hover:bg-white/5 transition text-sm">Projects</a>
            <a href="#contact" class="px-4 py-3 rounded-xl hover:text-white hover:bg-white/5 transition text-sm">Contact</a>

            <a href="#contact" 
               class="mt-2 bg-indigo-500 px-4 py-3 rounded-xl text-sm text-center font-medium
                      hover:bg-indigo-600 transition shadow-lg shadow-indigo-500/25">
                Hire Me
            </a>

        </div>
    </div>

</nav>
