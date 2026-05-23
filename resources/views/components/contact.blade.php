<section id="contact" class="relative py-16 sm:py-24 bg-[#070B1A] overflow-hidden">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-to-r from-[#070B1A] via-[#0A0F2A] to-[#12163C]"></div>

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
            w-[600px] sm:w-[800px] h-[600px] sm:h-[800px] bg-indigo-600/20 blur-[120px] sm:blur-[160px] rounded-full">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- HEADER -->
        <div class="mb-8 sm:mb-12">
            <p class="text-indigo-400 text-xs sm:text-sm tracking-widest mb-2">
                LET&rsquo;S CONNECT
            </p>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">
                Get in touch
            </h2>
        </div>

        <!-- GRID -->
        <div class="grid lg:grid-cols-3 gap-6 sm:gap-8">

            <!-- FORM -->
            <div class="lg:col-span-2 p-5 sm:p-6 rounded-2xl 
                bg-white/5 backdrop-blur-xl 
                border border-white/10
                shadow-[0_10px_40px_rgba(0,0,0,0.4)]">

                <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
                    @csrf

                    <div class="grid sm:grid-cols-2 gap-4">
                        <input type="text" name="name" placeholder="Your Name" required
                            class="w-full p-3 rounded-lg bg-white/5 border border-white/10 
                            text-white text-sm placeholder-gray-400 focus:outline-none 
                            focus:border-indigo-400">

                        <input type="email" name="email" placeholder="Your Email" required
                            class="w-full p-3 rounded-lg bg-white/5 border border-white/10 
                            text-white text-sm placeholder-gray-400 focus:outline-none 
                            focus:border-indigo-400">
                    </div>

                    <textarea rows="4" name="message" placeholder="Your Message" required
                        class="w-full p-3 rounded-lg bg-white/5 border border-white/10 
                        text-white text-sm placeholder-gray-400 focus:outline-none 
                        focus:border-indigo-400"></textarea>

                    <button type="submit"
                        class="w-full sm:w-auto px-6 py-3 rounded-xl 
                        bg-gradient-to-r from-indigo-500 to-purple-500
                        hover:opacity-90
                        shadow-lg shadow-indigo-500/30
                        transition flex items-center justify-center gap-2 text-sm">
                        Send Message ✈
                    </button>

                </form>
            </div>

            <!-- INFO -->
            <div class="p-5 sm:p-6 rounded-2xl 
                bg-white/5 backdrop-blur-xl 
                border border-white/10
                shadow-[0_10px_40px_rgba(0,0,0,0.4)] space-y-4 sm:space-y-6">

                <!-- EMAIL -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <div class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center shrink-0
                        rounded-lg bg-indigo-500/20 text-indigo-400">
                        <i class="fa-solid fa-envelope text-sm"></i>
                    </div>
                    <div class="min-w-0">
                        <p class="text-gray-400 text-xs sm:text-sm">Email</p>
                        <p class="text-white text-xs sm:text-sm truncate">andika@example.com</p>
                    </div>
                </div>

                <!-- PHONE -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <div class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center shrink-0
                        rounded-lg bg-indigo-500/20 text-indigo-400">
                        <i class="fa-solid fa-phone text-sm"></i>
                    </div>
                    <div class="min-w-0">
                        <p class="text-gray-400 text-xs sm:text-sm">Phone</p>
                        <p class="text-white text-xs sm:text-sm truncate">+62 812-3456-7890</p>
                    </div>
                </div>

                <!-- LOCATION -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <div class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center shrink-0
                        rounded-lg bg-indigo-500/20 text-indigo-400">
                        <i class="fa-solid fa-location-dot text-sm"></i>
                    </div>
                    <div class="min-w-0">
                        <p class="text-gray-400 text-xs sm:text-sm">Location</p>
                        <p class="text-white text-xs sm:text-sm">Jakarta, Indonesia</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
