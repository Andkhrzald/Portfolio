<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Andika Rizaldi - Fullstack Developer specializing in Laravel, Flutter, and modern web applications.">
    <meta name="keywords" content="Andika Rizaldi, Fullstack Developer, Laravel, Flutter, Web Developer, Portfolio">
    <meta property="og:title" content="Andika Rizaldi - Fullstack Developer">
    <meta property="og:description" content="Fullstack Developer specializing in Laravel, Flutter, and modern web applications.">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/png" href="{{ asset('images/profile/andikha.png') }}">
    <title>Andika Rizaldi - Fullstack Developer</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#0B0F1A] text-white font-[Inter]">

@include('components.navbar')

<main>
    @yield('content')
</main>

@include('components.footer')

<script>
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('menu-btn');
    if (btn) {
        const menu = document.getElementById('mobile-menu');
        const lines = btn.querySelectorAll('span');
        let open = false;
        btn.addEventListener('click', () => {
            open = !open;
            menu.style.maxHeight = open ? menu.scrollHeight + 'px' : '0px';
            lines[0].classList.toggle('rotate-45');
            lines[0].classList.toggle('translate-y-[6px]');
            lines[1].classList.toggle('opacity-0');
            lines[2].classList.toggle('-rotate-45');
            lines[2].classList.toggle('-translate-y-[6px]');
        });
    }

    const light = document.getElementById('cursor-light');
    if (light) {
        let ticking = false;
        document.addEventListener('mousemove', (e) => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    light.style.background = `radial-gradient(circle at ${e.clientX}px ${e.clientY}px, rgba(99,102,241,0.25), transparent 300px)`;
                    ticking = false;
                });
                ticking = true;
            }
        });
    }
});
</script>

@vite('resources/js/app.js')

@stack('scripts')

</body>
</html>