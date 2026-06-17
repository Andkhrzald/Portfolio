<section id="certificates" class="relative py-14 sm:py-18 overflow-hidden bg-surface">

    <div class="absolute inset-0 -z-10">
        <div class="absolute top-40 right-0 w-[500px] h-[500px] bg-sky-500/10 blur-[140px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-emerald-500/8 blur-[120px] rounded-full"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-10 sm:mb-14">
            <div class="flex items-center justify-center gap-4 mb-3">
                <span class="w-8 h-[2px] bg-gradient-to-r from-transparent via-sky-400 to-transparent"></span>
                <p class="text-sky-400 text-[11px] sm:text-xs tracking-[0.25em] font-medium">{{ __('certificates.section_label') }}</p>
                <span class="w-8 h-[2px] bg-gradient-to-r from-transparent via-sky-400 to-transparent"></span>
            </div>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold">
                {{ __('certificates.heading_start') }}
                <span class="bg-gradient-to-r from-sky-400 to-emerald-400 text-transparent bg-clip-text">{{ __('certificates.heading_end') }}</span>
            </h2>
        </div>

        <div class="flex flex-wrap justify-center gap-2 sm:gap-3">

            @foreach ($certificates as $cert)
            @php
                $folder = $cert['id'];
                $totalPages = $cert['pages'];
                $hasThumb = file_exists(public_path("certificates/{$folder}/thumb-page-1.jpg"));
                $isTeam = isset($cert['team']);
            @endphp

            <div class="group relative rounded-xl overflow-hidden bg-surface-light/40 border border-white/[0.06]
                        hover:border-sky-500/30 hover:shadow-lg hover:shadow-sky-500/10
                        transition-all duration-400 cursor-pointer h-28 sm:h-36 w-24 sm:w-32"
                 onclick="openLightbox('{{ $cert['id'] }}')"
                 role="button"
                 tabindex="0"
                 onkeydown="if(event.key==='Enter')openLightbox('{{ $cert['id'] }}')">

                @if ($hasThumb)
                <img src="{{ asset("certificates/{$folder}/thumb-page-1.jpg") }}"
                     alt="{{ $cert['title'] }}"
                     class="absolute inset-0 w-full h-full object-cover object-top
                            transition-all duration-700 group-hover:scale-105"
                     draggable="false"
                     loading="lazy">
                @endif

                <div class="absolute inset-0 bg-gradient-to-t from-surface/80 via-surface/5 to-transparent"></div>

                @if ($cert['badge'] === 'active')
                <span class="absolute top-2 right-2 w-1.5 h-1.5 rounded-full bg-emerald-400 shadow-lg shadow-emerald-400/50 animate-pulse"></span>
                @endif

                <div class="absolute bottom-0 left-0 right-0 p-2 sm:p-3">
                    <p class="text-white text-[10px] sm:text-xs font-semibold leading-tight line-clamp-2 drop-shadow-lg">
                        {{ $cert['title'] }}
                    </p>
                </div>

                <div class="absolute inset-0 ring-1 ring-inset ring-white/0 group-hover:ring-sky-400/30 transition-all duration-400 rounded-xl pointer-events-none"></div>
            </div>
            @endforeach

        </div>
    </div>

    {{-- Lightbox Modal --}}
    <div id="certLightbox"
         class="fixed inset-0 z-[100] flex items-center justify-center hidden"
         role="dialog"
         aria-modal="true"
         aria-label="Certificate preview">

        <div id="lightboxBackdrop"
             class="absolute inset-0 bg-black/85 backdrop-blur-md cursor-pointer"
             onclick="closeLightbox()"></div>

        <div class="relative z-10 w-full h-full flex items-center justify-center p-4 sm:p-8 md:p-12"
             onclick="if(event.target===event.currentTarget)closeLightbox()">

            <button onclick="closeLightbox()"
                    class="absolute top-4 right-4 sm:top-6 sm:right-6 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur-sm
                           flex items-center justify-center text-white/70 hover:text-white transition-all duration-300 z-20 border border-white/10"
                    aria-label="{{ __('certificates.lightbox.close') }}">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>

            <div class="flex flex-col lg:flex-row items-center gap-6 max-w-5xl w-full max-h-full">

                <div class="relative flex-1 min-w-0 max-w-[90vw] lg:max-w-[75%] flex items-center justify-center">
                    @if ($totalPages > 1)
                    <button id="prevBtn"
                            onclick="prevPage()"
                            class="absolute left-2 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/40 hover:bg-black/60 backdrop-blur-sm
                                   flex items-center justify-center text-white/70 hover:text-white transition-all duration-300 z-10 border border-white/10"
                            aria-label="{{ __('certificates.lightbox.prev') }}">
                        <i class="fa-solid fa-chevron-left text-sm"></i>
                    </button>

                    <button id="nextBtn"
                            onclick="nextPage()"
                            class="absolute right-2 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/40 hover:bg-black/60 backdrop-blur-sm
                                   flex items-center justify-center text-white/70 hover:text-white transition-all duration-300 z-10 border border-white/10"
                            aria-label="{{ __('certificates.lightbox.next') }}">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </button>
                    @endif

                    <div class="relative flex items-center justify-center overflow-hidden rounded-xl" id="lightboxImageWrapper">
                        <img id="lightboxImage"
                             src=""
                             alt=""
                             class="max-w-full max-h-[calc(100vh-12rem)] object-contain rounded-xl shadow-2xl select-none"
                             draggable="false"
                             oncontextmenu="return false"
                             ondragstart="return false">

                        <div class="absolute inset-0 pointer-events-none watermark-overlay"></div>
                    </div>
                </div>

                <div id="lightboxInfo"
                     class="lg:w-72 w-full shrink-0 bg-white/[0.03] backdrop-blur-xl border border-white/[0.06] rounded-xl p-5 max-h-64 lg:max-h-96 overflow-y-auto">
                    <div id="infoBadge" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-medium border mb-3"></div>
                    <h3 id="infoTitle" class="text-white font-bold text-sm sm:text-base mb-1"></h3>
                    <p id="infoIssuer" class="text-sky-300 text-xs font-medium mb-3"></p>
                    <p id="infoDesc" class="text-gray-400 text-xs leading-relaxed"></p>

                    <div id="infoTeam" class="mt-3 pt-3 border-t border-white/[0.06] hidden">
                        <p class="text-[10px] text-gray-500 uppercase tracking-wider mb-2">{{ __('certificates.lightbox.team') }}</p>
                        <div id="teamMembers" class="flex flex-wrap gap-2"></div>
                    </div>

                    @if ($totalPages > 1)
                    <div class="mt-4 pt-3 border-t border-white/[0.06]">
                        <div class="flex items-center justify-center gap-2">
                            @for ($i = 1; $i <= $totalPages; $i++)
                            <button onclick="goToPage({{ $i }})"
                                    class="page-dot w-2 h-2 rounded-full bg-white/20 hover:bg-white/40 transition-all duration-300"
                                    data-page="{{ $i }}"
                                    aria-label="Page {{ $i }}">
                            </button>
                            @endfor
                        </div>
                        <p id="pageIndicator" class="text-[10px] text-gray-500 text-center mt-2"></p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
const certificates = @json($certificates);
let currentId = null;
let currentPage = 1;
let totalPages = 1;

function openLightbox(id) {
    const cert = certificates.find(c => c.id === id);
    if (!cert) return;

    currentId = id;
    currentPage = 1;
    totalPages = cert.pages || 1;

    const modal = document.getElementById('certLightbox');

    updateLightboxContent(cert, 1);
    updateNavigation();

    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('certLightbox').classList.add('hidden');
    document.body.style.overflow = '';
    currentId = null;
}

function updateLightboxContent(cert, page) {
    const img = document.getElementById('lightboxImage');
    const titleEl = document.getElementById('infoTitle');
    const issuerEl = document.getElementById('infoIssuer');
    const descEl = document.getElementById('infoDesc');
    const badgeEl = document.getElementById('infoBadge');
    const teamEl = document.getElementById('infoTeam');
    const teamMembers = document.getElementById('teamMembers');

    img.src = `/certificates/${cert.id}/page-${page}.jpg`;
    img.alt = cert.title || '';

    titleEl.textContent = cert.title || '';
    issuerEl.textContent = cert.issuer || '';

    const badgeColors = {
        active: 'bg-emerald-500/10 text-emerald-300 border-emerald-500/20',
        completed: 'bg-sky-500/10 text-sky-300 border-sky-500/20'
    };
    const badgeDot = cert.badge === 'active' ? 'bg-emerald-400' : 'bg-sky-400';
    badgeEl.className = `inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-medium border ${badgeColors[cert.badge] || badgeColors.completed}`;
    badgeEl.innerHTML = `<span class="w-1.5 h-1.5 rounded-full ${badgeDot} animate-pulse"></span> ${cert.period || ''}`;

    descEl.textContent = cert.desc || '';

    if (cert.team) {
        teamEl.classList.remove('hidden');
        teamMembers.innerHTML = cert.team.map(t =>
            `<span class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.04] border border-white/[0.06] text-gray-400">${t}</span>`
        ).join('');
    } else {
        teamEl.classList.add('hidden');
    }

    const indicators = document.querySelectorAll('.page-dot');
    if (indicators.length) {
        indicators.forEach(dot => {
            const p = parseInt(dot.dataset.page);
            dot.classList.toggle('bg-white/60', p === page);
            dot.classList.toggle('scale-125', p === page);
            dot.classList.toggle('bg-white/20', p !== page);
            dot.classList.toggle('scale-100', p !== page);
        });
    }

    const pageIndicator = document.getElementById('pageIndicator');
    if (pageIndicator && totalPages > 1) {
        const pageText = '{{ __("certificates.lightbox.page") }}';
        const ofText = '{{ __("certificates.lightbox.of") }}';
        pageIndicator.textContent = `${pageText} ${page} ${ofText} ${totalPages}`;
    }
}

function updateNavigation() {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    if (prevBtn) prevBtn.style.display = currentPage <= 1 ? 'none' : 'flex';
    if (nextBtn) nextBtn.style.display = currentPage >= totalPages ? 'none' : 'flex';
}

function goToPage(page) {
    if (page < 1 || page > totalPages) return;
    currentPage = page;
    const cert = certificates.find(c => c.id === currentId);
    if (cert) updateLightboxContent(cert, page);
    updateNavigation();
}

function nextPage() { goToPage(currentPage + 1); }
function prevPage() { goToPage(currentPage - 1); }

document.addEventListener('keydown', (e) => {
    if (!currentId) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowRight') nextPage();
    if (e.key === 'ArrowLeft') prevPage();
});

let touchStartX = 0;
let touchEndX = 0;
document.addEventListener('touchstart', (e) => {
    if (!currentId) return;
    touchStartX = e.changedTouches[0].screenX;
}, { passive: true });
document.addEventListener('touchend', (e) => {
    if (!currentId) return;
    touchEndX = e.changedTouches[0].screenX;
    const diff = touchStartX - touchEndX;
    if (Math.abs(diff) > 60) {
        if (diff > 0) nextPage();
        else prevPage();
    }
}, { passive: true });
</script>
@endpush
