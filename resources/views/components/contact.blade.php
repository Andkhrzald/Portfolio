<section id="contact" class="relative py-14 sm:py-18 bg-[#070B1A] overflow-hidden">

    {{-- BACKGROUND MESH --}}
    <div class="mesh-bg">
        <div class="mesh-bg-blob"></div>
        <div class="mesh-bg-blob"></div>
        <div class="mesh-bg-blob"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        {{-- HEADER --}}
        <div class="text-center mb-14 sm:mb-20">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs sm:text-sm tracking-widest mb-4 animate-fade-in-up">
                <span class="w-1.5 h-1.5 bg-indigo-400 rounded-full animate-ping"></span>
                CONTACT
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white animate-fade-in-up">
                Let's <span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 text-transparent bg-clip-text">Work Together</span>
            </h2>
            <p class="text-gray-500 text-sm sm:text-base mt-3 max-w-xl mx-auto animate-fade-in-up">
                Have a project in mind or just want to say hi? Fill out the form below and I'll get back to you.
            </p>
        </div>

        {{-- GRID --}}
        <div class="grid lg:grid-cols-5 gap-6 sm:gap-8 lg:gap-10">

            {{-- =============================== --}}
            {{-- LEFT: FORM CARD --}}
            {{-- =============================== --}}
            <div class="lg:col-span-3 animate-fade-in-up">

                <div class="group relative p-[1px] rounded-2xl
                            bg-gradient-to-b from-white/10 via-transparent to-transparent
                            hover:from-indigo-500/30 hover:via-purple-500/20 hover:to-transparent
                            transition-all duration-700">

                    <div class="relative p-6 sm:p-8 rounded-2xl
                                bg-[#0B0F1A]/90 backdrop-blur-xl
                                border border-white/[0.06]
                                shadow-[0_10px_40px_rgba(0,0,0,0.5)]
                                transition-all duration-500">

                        {{-- FLASH SUCCESS --}}
                        @if (session('success'))
                        <div id="success-toast"
                             class="flex items-start gap-3 p-4 mb-6 rounded-xl
                                    bg-emerald-500/10 border border-emerald-500/20
                                    animate-toast-in">
                            <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <i class="fa-solid fa-check text-sm"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-emerald-300 text-sm font-medium">Message Sent!</p>
                                <p class="text-gray-400 text-xs mt-0.5">{{ session('success') }}</p>
                            </div>
                            <button type="button" onclick="dismissToast()" class="flex-shrink-0 text-gray-500 hover:text-white transition">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        @endif

                        {{-- FLASH ERROR --}}
                        @if ($errors->any())
                        <div class="flex items-start gap-3 p-4 mb-6 rounded-xl
                                    bg-red-500/10 border border-red-500/20
                                    animate-toast-in">
                            <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-lg bg-red-500/20 text-red-400">
                                <i class="fa-solid fa-exclamation text-sm"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-red-300 text-sm font-medium">Form Error</p>
                                <ul class="text-gray-400 text-xs mt-0.5 space-y-0.5">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <button type="button" onclick="this.parentElement.remove()" class="flex-shrink-0 text-gray-500 hover:text-white transition">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        @endif

                        <form method="POST" action="{{ route('contact.send') }}" id="contact-form" class="space-y-5">
                            @csrf

                            {{-- NAME + EMAIL ROW --}}
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div class="floating-group">
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                           placeholder=" "
                                           class="peer w-full px-4 pt-5 pb-2 rounded-xl bg-white/5 border border-white/10
                                                  text-white text-sm
                                                  focus:outline-none focus:border-indigo-500/50 focus:ring-1 focus:ring-indigo-500/20
                                                  transition-all duration-300
                                                  placeholder-transparent">
                                    <label for="name"
                                           class="floating-label absolute left-4 top-4 text-gray-500 text-sm
                                                  transition-all duration-300 pointer-events-none
                                                  peer-focus:text-indigo-400">
                                        <i class="fa-regular fa-user mr-1.5"></i>Your Name
                                    </label>
                                </div>

                                <div class="floating-group">
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                           placeholder=" "
                                           class="peer w-full px-4 pt-5 pb-2 rounded-xl bg-white/5 border border-white/10
                                                  text-white text-sm
                                                  focus:outline-none focus:border-indigo-500/50 focus:ring-1 focus:ring-indigo-500/20
                                                  transition-all duration-300
                                                  placeholder-transparent">
                                    <label for="email"
                                           class="floating-label absolute left-4 top-4 text-gray-500 text-sm
                                                  transition-all duration-300 pointer-events-none
                                                  peer-focus:text-indigo-400">
                                        <i class="fa-regular fa-envelope mr-1.5"></i>Your Email
                                    </label>
                                </div>
                            </div>

                            {{-- SUBJECT --}}
                            <div class="floating-group">
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                       placeholder=" "
                                       class="peer w-full px-4 pt-5 pb-2 rounded-xl bg-white/5 border border-white/10
                                              text-white text-sm
                                              focus:outline-none focus:border-indigo-500/50 focus:ring-1 focus:ring-indigo-500/20
                                              transition-all duration-300
                                              placeholder-transparent">
                                <label for="subject"
                                       class="floating-label absolute left-4 top-4 text-gray-500 text-sm
                                              transition-all duration-300 pointer-events-none
                                              peer-focus:text-indigo-400">
                                    <i class="fa-regular fa-pen-to-square mr-1.5"></i>Subject (optional)
                                </label>
                            </div>

                            {{-- MESSAGE --}}
                            <div class="floating-group">
                                <textarea id="message" name="message" rows="5" required
                                          placeholder=" "
                                          class="peer w-full px-4 pt-5 pb-2 rounded-xl bg-white/5 border border-white/10
                                                 text-white text-sm resize-none
                                                 focus:outline-none focus:border-indigo-500/50 focus:ring-1 focus:ring-indigo-500/20
                                                 transition-all duration-300
                                                 placeholder-transparent">{{ old('message') }}</textarea>
                                <label for="message"
                                       class="floating-label absolute left-4 top-4 text-gray-500 text-sm
                                              transition-all duration-300 pointer-events-none
                                              peer-focus:text-indigo-400">
                                    <i class="fa-regular fa-comment-dots mr-1.5"></i>Your Message
                                </label>
                            </div>

                            {{-- SUBMIT --}}
                            <button type="submit" id="submit-btn"
                                    class="group/btn relative w-full sm:w-auto px-8 py-3.5 rounded-xl
                                           bg-gradient-to-r from-indigo-500 to-purple-600
                                           hover:from-indigo-400 hover:to-purple-500
                                           shadow-lg shadow-indigo-500/25
                                           hover:shadow-xl hover:shadow-indigo-500/30
                                           text-white text-sm font-medium
                                           transition-all duration-300
                                           flex items-center justify-center gap-2.5
                                           overflow-hidden">
                                <span class="btn-text inline-flex items-center gap-2.5">
                                    Send Message
                                    <i class="fa-solid fa-paper-plane text-xs group-hover/btn:translate-x-0.5 group-hover/btn:-translate-y-0.5 transition-transform duration-300"></i>
                                </span>
                                <span class="btn-spinner hidden">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                    </svg>
                                </span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            {{-- =============================== --}}
            {{-- RIGHT: INFO --}}
            {{-- =============================== --}}
            <div class="lg:col-span-2 space-y-5 sm:space-y-6">

                {{-- CONTACT INFO --}}
                <div style="animation-delay: 0.2s"
                     class="animate-fade-in-up p-5 sm:p-6 rounded-2xl
                            bg-[#0B0F1A]/90 backdrop-blur-xl
                            border border-white/[0.06]
                            shadow-[0_10px_40px_rgba(0,0,0,0.5)]
                            space-y-4 sm:space-y-5">

                    {{-- EMAIL --}}
                    <div class="flex items-center gap-3 sm:gap-4 group/card">
                        <div class="w-10 h-10 flex items-center justify-center shrink-0 rounded-xl
                                    bg-indigo-500/10 border border-indigo-500/20 text-indigo-400
                                    group-hover/card:bg-indigo-500/20 group-hover/card:border-indigo-500/30
                                    transition-all duration-300">
                            <i class="fa-solid fa-envelope text-sm"></i>
                        </div>
                        <div class="min-w-0">
                            <p class="text-gray-500 text-xs">Email</p>
                            <a href="mailto:rizaldipt20@gmail.com"
                               class="text-white text-sm hover:text-indigo-400 transition truncate block">
                                rizaldipt20@gmail.com
                            </a>
                        </div>
                    </div>

                    {{-- PHONE --}}
                    <div class="flex items-center gap-3 sm:gap-4 group/card">
                        <div class="w-10 h-10 flex items-center justify-center shrink-0 rounded-xl
                                    bg-indigo-500/10 border border-indigo-500/20 text-indigo-400
                                    group-hover/card:bg-indigo-500/20 group-hover/card:border-indigo-500/30
                                    transition-all duration-300">
                            <i class="fa-solid fa-phone text-sm"></i>
                        </div>
                        <div class="min-w-0">
                            <p class="text-gray-500 text-xs">Phone</p>
                            <a href="tel:+6283871268561"
                               class="text-white text-sm hover:text-indigo-400 transition truncate block">
                                +62 838-7126-8561
                            </a>
                        </div>
                    </div>

                    {{-- LOCATION --}}
                    <div class="flex items-center gap-3 sm:gap-4 group/card">
                        <div class="w-10 h-10 flex items-center justify-center shrink-0 rounded-xl
                                    bg-indigo-500/10 border border-indigo-500/20 text-indigo-400
                                    group-hover/card:bg-indigo-500/20 group-hover/card:border-indigo-500/30
                                    transition-all duration-300">
                            <i class="fa-solid fa-location-dot text-sm"></i>
                        </div>
                        <div class="min-w-0">
                            <p class="text-gray-500 text-xs">Location</p>
                            <p class="text-white text-sm">Jakarta, Indonesia</p>
                        </div>
                    </div>

                </div>

                {{-- SOCIAL --}}
                <div style="animation-delay: 0.3s"
                     class="animate-fade-in-up p-5 sm:p-6 rounded-2xl
                            bg-[#0B0F1A]/90 backdrop-blur-xl
                            border border-white/[0.06]
                            shadow-[0_10px_40px_rgba(0,0,0,0.5)]">
                    <div class="flex items-center justify-between gap-4">
                        <p class="text-gray-400 text-xs sm:text-sm font-medium">Find me on</p>
                        <div class="flex gap-3">
                            <a href="https://github.com/Andkhrzald" target="_blank" rel="noopener noreferrer"
                               class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center rounded-xl
                                      bg-white/5 border border-white/10 text-gray-400
                                      hover:bg-indigo-500/20 hover:border-indigo-500/30 hover:text-indigo-400
                                      transition-all duration-300">
                                <i class="fa-brands fa-github text-sm"></i>
                            </a>
                            <a href="https://linkedin.com/in/andikarizaldi" target="_blank" rel="noopener noreferrer"
                               class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center rounded-xl
                                      bg-white/5 border border-white/10 text-gray-400
                                      hover:bg-indigo-500/20 hover:border-indigo-500/30 hover:text-indigo-400
                                      transition-all duration-300">
                                <i class="fa-brands fa-linkedin-in text-sm"></i>
                            </a>
                            <a href="https://instagram.com/andikarizaldi" target="_blank" rel="noopener noreferrer"
                               class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center rounded-xl
                                      bg-white/5 border border-white/10 text-gray-400
                                      hover:bg-indigo-500/20 hover:border-indigo-500/30 hover:text-indigo-400
                                      transition-all duration-300">
                                <i class="fa-brands fa-instagram text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ---- Auto-dismiss success toast after 4s ----
    const toast = document.getElementById('success-toast');
    if (toast) {
        setTimeout(() => {
            toast.classList.remove('animate-toast-in');
            toast.classList.add('animate-toast-out');
            setTimeout(() => toast.remove(), 300);
        }, 4000);
    }

    // ---- Form loading state ----
    const form = document.getElementById('contact-form');
    const btn = document.getElementById('submit-btn');
    if (form && btn) {
        form.addEventListener('submit', function () {
            btn.classList.add('btn-loading');
            btn.querySelector('.btn-spinner').classList.remove('hidden');
            btn.disabled = true;
        });
    }

    // ---- Floating label fix for filled inputs on page load ----
    document.querySelectorAll('.floating-group input, .floating-group textarea').forEach(el => {
        if (el.value.trim() !== '') {
            el.setAttribute('placeholder', ' ');
        }
    });
});

function dismissToast() {
    const toast = document.getElementById('success-toast');
    if (toast) {
        toast.classList.remove('animate-toast-in');
        toast.classList.add('animate-toast-out');
        setTimeout(() => toast.remove(), 300);
    }
}
</script>
@endpush