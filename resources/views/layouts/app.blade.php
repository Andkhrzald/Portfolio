<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <meta charset="UTF-8">
    <title>Andika Portfolio</title>

    @vite('resources/css/app.css')

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#0B0F1A] text-white font-[Inter]">

@include('components.navbar')

<main>
    @yield('content')
</main>

@include('components.footer')

<script>
window.addEventListener('load', () => {
    const marquee = document.getElementById('marquee');

    let position = 0;
    let speed = 0;
    let lastScroll = window.scrollY;
    let velocity = 0;

    function animate() {
        position += speed;

        marquee.style.transform = `translateX(-${position}px)`;

        // reset infinite
        if (position >= marquee.scrollWidth / 2) {
            position = 0;
        }
        if (position < 0) {
            position = marquee.scrollWidth / 2;
        }

        // friction (biar pelan lagi)
        speed *= 0.92;

        requestAnimationFrame(animate);
    }

    animate();

    window.addEventListener('scroll', () => {
        let currentScroll = window.scrollY;

        // hitung velocity scroll
        velocity = currentScroll - lastScroll;

        // convert jadi speed
        speed += velocity * 0.05;

        // limit biar ga liar
        speed = Math.max(Math.min(speed, 5), -5);

        lastScroll = currentScroll;
    });
});
</script>

<!-- js navbar -->

<script>
document.addEventListener("DOMContentLoaded", () => {

    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("mobile-menu");
    const lines = btn.querySelectorAll("span");

    let open = false;

    btn.addEventListener("click", () => {
        open = !open;

        // toggle menu
        if (open) {
            menu.style.maxHeight = menu.scrollHeight + "px";
        } else {
            menu.style.maxHeight = "0px";
        }

        // animasi hamburger → X
        lines[0].classList.toggle("rotate-45");
        lines[0].classList.toggle("translate-y-[6px]");

        lines[1].classList.toggle("opacity-0");

        lines[2].classList.toggle("-rotate-45");
        lines[2].classList.toggle("-translate-y-[6px]");
    });

});
</script>

<!-- hero js-->

<script>
const img = document.getElementById('hero-img');

document.addEventListener('mousemove', (e) => {
    const x = (window.innerWidth / 2 - e.clientX) / 25;
    const y = (window.innerHeight / 2 - e.clientY) / 25;

    img.style.transform = `translate(${x}px, ${y}px)`;
});
</script>

<script>
const card = document.getElementById("card-3d");

document.addEventListener("mousemove", (e) => {
    const x = (window.innerWidth / 2 - e.clientX) / 25;
    const y = (window.innerHeight / 2 - e.clientY) / 25;

    card.style.transform = `
        rotateY(${x}deg) 
        rotateX(${y}deg)
        scale(1.03)
    `;
});

document.addEventListener("mouseleave", () => {
    card.style.transform = "rotateY(0deg) rotateX(0deg)";
});
</script>

<script>
const light = document.getElementById("cursor-light");

document.addEventListener("mousemove", (e) => {
    const x = e.clientX;
    const y = e.clientY;

    light.style.background = `
        radial-gradient(
            circle at ${x}px ${y}px,
            rgba(99,102,241,0.25),
            transparent 300px
        )
    `;
});
</script>


</body>
</html>