<section id="certificates" class="relative py-14 sm:py-18 overflow-hidden bg-surface">

    <div class="absolute inset-0 -z-10">
        <div class="absolute top-40 right-0 w-[500px] h-[500px] bg-sky-500/10 blur-[140px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-emerald-500/8 blur-[120px] rounded-full"></div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-16 sm:mb-20">
            <div class="flex items-center justify-center gap-4 mb-4">
                <span class="w-10 h-[2px] bg-gradient-to-r from-transparent via-sky-400 to-transparent"></span>
                <p class="text-sky-400 text-xs sm:text-sm tracking-[0.25em] font-medium">{{ __('certificates.section_label') }}</p>
                <span class="w-10 h-[2px] bg-gradient-to-r from-transparent via-sky-400 to-transparent"></span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold">
                {{ __('certificates.heading_start') }}
                <span class="bg-gradient-to-r from-sky-400 to-emerald-400 text-transparent bg-clip-text">{{ __('certificates.heading_end') }}</span>
            </h2>
            <p class="text-gray-500 text-sm sm:text-base mt-3 max-w-xl mx-auto">
                {{ __('certificates.subtitle') }}
            </p>
        </div>

        <div class="grid sm:grid-cols-2 gap-6 sm:gap-8">

            <!-- BNSP CERTIFICATE -->
            <div class="group bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-2xl p-6 sm:p-8
                hover:bg-white/[0.05] hover:border-sky-500/20 hover:shadow-lg hover:shadow-sky-500/5
                transition duration-300 relative overflow-hidden">

                <div class="absolute top-0 right-0 w-32 h-32 bg-sky-500/5 blur-[60px] rounded-full -z-0"></div>

                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-sky-500 to-cyan-600 flex items-center justify-center shadow-lg shadow-sky-500/30 mb-5">
                        <i class="fa-solid fa-certificate text-white text-xl"></i>
                    </div>

                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-medium
                        bg-emerald-500/10 text-emerald-300 border border-emerald-500/20 mb-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        {{ __('certificates.bnsp.period') }}
                    </div>

                    <h3 class="text-lg sm:text-xl font-bold text-white mb-1">{{ __('certificates.bnsp.title') }}</h3>
                    <p class="text-sky-300 text-xs sm:text-sm font-medium mb-2">{{ __('certificates.bnsp.level') }}</p>
                    <p class="text-gray-400 text-xs sm:text-sm mb-4">{{ __('certificates.bnsp.issuer') }}</p>

                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                        {{ __('certificates.bnsp.desc') }}
                    </p>

                    <div class="mt-5 pt-4 border-t border-white/[0.06] flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-sky-500 to-cyan-600 flex items-center justify-center text-[10px] font-bold text-white">BN</div>
                        <div>
                            <p class="text-xs text-white font-medium">BNSP</p>
                            <p class="text-[10px] text-gray-500">KKNI Level II</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COPYRIGHT CERTIFICATE -->
            <div class="group bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-2xl p-6 sm:p-8
                hover:bg-white/[0.05] hover:border-emerald-500/20 hover:shadow-lg hover:shadow-emerald-500/5
                transition duration-300 relative overflow-hidden">

                <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 blur-[60px] rounded-full -z-0"></div>

                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shadow-lg shadow-emerald-500/30 mb-5">
                        <i class="fa-solid fa-copyright text-white text-xl"></i>
                    </div>

                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-medium
                        bg-sky-500/10 text-sky-300 border border-sky-500/20 mb-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400 animate-pulse"></span>
                        {{ __('certificates.copyright.period') }}
                    </div>

                    <h3 class="text-lg sm:text-xl font-bold text-white mb-1">{{ __('certificates.copyright.title') }}</h3>
                    <p class="text-emerald-300 text-xs sm:text-sm font-medium mb-2">{{ __('certificates.copyright.type') }}</p>
                    <p class="text-gray-400 text-xs sm:text-sm mb-4">{{ __('certificates.copyright.issuer') }}</p>

                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                        {{ __('certificates.copyright.desc') }}
                    </p>

                    <div class="mt-5 pt-4 border-t border-white/[0.06] flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-[10px] font-bold text-white">DJ</div>
                        <div>
                            <p class="text-xs text-white font-medium">DJKI</p>
                            <p class="text-[10px] text-gray-500">{{ __('certificates.copyright.type') }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
