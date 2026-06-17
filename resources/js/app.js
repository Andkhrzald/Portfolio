document.addEventListener('DOMContentLoaded', () => {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible');
            }
        });
    }, {
        threshold: 0,
        rootMargin: '0px 0px -60px 0px'
    });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => revealObserver.observe(el));

    const bgObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const bg = entry.target.querySelector('.experience-bg');
            if (!bg) return;
            if (entry.isIntersecting) {
                bg.classList.add('visible');
            } else {
                bg.classList.remove('visible');
            }
        });
    }, {
        threshold: 0,
        rootMargin: '0px 0px -60px 0px'
    });

    document.querySelectorAll('.experience-entry').forEach(el => bgObserver.observe(el));

    const parallaxLayers = document.querySelectorAll('.parallax-layer');
    if (parallaxLayers.length > 0) {
        let ticking = false;

        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    parallaxLayers.forEach(layer => {
                        const entry = layer.closest('.experience-entry');
                        if (!entry) return;
                        const rect = entry.getBoundingClientRect();
                        const speed = parseFloat(layer.dataset.parallaxSpeed) || 0.12;
                        const viewCenter = window.innerHeight / 2;
                        const entryCenter = rect.top + rect.height / 2;
                        const offset = (viewCenter - entryCenter) * speed;
                        layer.style.transform = `translateY(${offset}px)`;
                    });
                    ticking = false;
                });
                ticking = true;
            }
        });
    }
});