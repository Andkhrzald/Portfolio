<nav id="navbar" class="fixed top-3 sm:top-4 left-1/2 -translate-x-1/2
            w-[90%] max-w-5xl z-50 transition-all duration-500">

    <div class="nav-pill relative rounded-2xl border border-white/10 shadow-2xl shadow-black/40
                px-4 sm:px-5 py-2 sm:py-2.5
                flex items-center justify-between gap-2">

        <!-- LOGO -->
        <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
            <span class="w-2 h-2 rounded-full bg-indigo-500 shadow-lg shadow-indigo-500/60"></span>
            <span class="font-bold text-base sm:text-lg tracking-tight">andkhrzal</span>
        </a>

        <!-- DESKTOP MENU -->
        <ul class="hidden md:flex items-center gap-0.5">
            <li>
                <a href="{{ route('home') }}#about"
                   class="nav-link {{ request()->routeIs('home') ? 'scroll-link' : '' }}">
                    {{ __('nav.about') }}
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}#skills" class="nav-link">{{ __('nav.skills') }}</a>
            </li>
            <li>
                <a href="{{ route('home') }}#experience" class="nav-link">{{ __('nav.experience') }}</a>
            </li>
            <li>
                <a href="{{ route('home') }}#projects"
                   class="nav-link {{ request()->routeIs('home') ? 'scroll-link' : '' }}">
                    {{ __('nav.projects') }}
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}#contact" class="nav-link">{{ __('nav.contact') }}</a>
            </li>
        </ul>

        <!-- LANGUAGE SWITCHER DESKTOP -->
        <div class="hidden md:flex items-center gap-0.5 bg-white/5 border border-white/10 rounded-full p-0.5 shrink-0">
            <a href="{{ route('lang.switch', 'en') }}"
               class="px-2.5 py-1 rounded-full text-xs font-medium transition
                      {{ app()->getLocale() === 'en' ? 'bg-indigo-500 text-white shadow-sm' : 'text-gray-400 hover:text-white' }}">
                EN
            </a>
            <a href="{{ route('lang.switch', 'id') }}"
               class="px-2.5 py-1 rounded-full text-xs font-medium transition
                      {{ app()->getLocale() === 'id' ? 'bg-indigo-500 text-white shadow-sm' : 'text-gray-400 hover:text-white' }}">
                ID
            </a>
        </div>

        <!-- HIRE ME DESKTOP -->
        <a href="{{ route('home') }}#contact"
           class="hidden md:inline-flex items-center gap-1.5 bg-indigo-500 hover:bg-indigo-600
                  px-4 py-1.5 rounded-full text-sm font-medium
                  transition shadow-lg shadow-indigo-500/25 shrink-0">
            {{ __('nav.hire_me') }}
            <span class="text-xs opacity-70">&rarr;</span>
        </a>

        <!-- HAMBURGER -->
        <button id="menu-btn" aria-label="Toggle menu"
                class="md:hidden flex flex-col gap-1 p-2 -mr-1 min-w-[36px] min-h-[36px] items-center justify-center">
            <span class="w-5 h-[2px] bg-gray-300 rounded-full transition-all duration-300"></span>
            <span class="w-5 h-[2px] bg-gray-300 rounded-full transition-all duration-300"></span>
            <span class="w-5 h-[2px] bg-gray-300 rounded-full transition-all duration-300"></span>
        </button>

    </div>

    <!-- MOBILE MENU DROPDOWN -->
    <div id="mobile-menu"
         class="mt-2 rounded-2xl overflow-hidden border border-white/10 nav-pill
                max-h-0 opacity-0 transition-all duration-400 ease-in-out">

        <div class="flex flex-col gap-0.5 px-4 pb-4 pt-3">

            <a href="{{ route('home') }}#about" class="nav-link w-full text-left">{{ __('nav.about') }}</a>
            <a href="{{ route('home') }}#skills" class="nav-link w-full text-left">{{ __('nav.skills') }}</a>
            <a href="{{ route('home') }}#experience" class="nav-link w-full text-left">{{ __('nav.experience') }}</a>
            <a href="{{ route('home') }}#projects"
               class="nav-link w-full text-left">
                {{ __('nav.projects') }}
            </a>
            <a href="{{ route('home') }}#contact" class="nav-link w-full text-left">{{ __('nav.contact') }}</a>

            <hr class="border-white/5 my-2">

            <!-- LANGUAGE SWITCHER MOBILE -->
            <div class="flex items-center gap-2 justify-center">
                <a href="{{ route('lang.switch', 'en') }}"
                   class="flex-1 text-center px-3 py-2 rounded-full text-sm font-medium transition
                          {{ app()->getLocale() === 'en' ? 'bg-indigo-500 text-white' : 'bg-white/5 text-gray-400 border border-white/10' }}">
                    EN
                </a>
                <a href="{{ route('lang.switch', 'id') }}"
                   class="flex-1 text-center px-3 py-2 rounded-full text-sm font-medium transition
                          {{ app()->getLocale() === 'id' ? 'bg-indigo-500 text-white' : 'bg-white/5 text-gray-400 border border-white/10' }}">
                    ID
                </a>
            </div>

            <a href="{{ route('home') }}#contact"
               class="flex items-center justify-center gap-2 bg-indigo-500 px-4 py-2.5 rounded-full text-sm font-medium
                      hover:bg-indigo-600 transition shadow-lg shadow-indigo-500/25 mt-1">
                {{ __('nav.hire_me') }} <span class="text-xs opacity-70">&rarr;</span>
            </a>

        </div>
    </div>

</nav>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('menu-btn');
    if (!btn) return;

    const menu = document.getElementById('mobile-menu');
    const lines = btn.querySelectorAll('span');
    let open = false;

    btn.addEventListener('click', () => {
        open = !open;
        if (open) {
            menu.style.maxHeight = '400px';
            menu.style.opacity = '1';
            lines[0].classList.add('rotate-45', 'translate-y-[6px]', 'w-5');
            lines[1].classList.add('opacity-0');
            lines[2].classList.add('-rotate-45', '-translate-y-[6px]', 'w-5');
        } else {
            menu.style.maxHeight = '0';
            menu.style.opacity = '0';
            lines[0].classList.remove('rotate-45', 'translate-y-[6px]', 'w-5');
            lines[1].classList.remove('opacity-0');
            lines[2].classList.remove('-rotate-45', '-translate-y-[6px]', 'w-5');
        }
    });
});
</script>
