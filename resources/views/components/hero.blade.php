<section class="h-screen flex items-center max-w-7xl mx-auto px-6">

<div class="grid md:grid-cols-2 gap-10 items-center w-full">

    <!-- TEXT -->
    <div>
        <p class="text-indigo-400 mb-2">Hello, I'm 👋</p>

        <h1 class="text-5xl font-bold mb-4">
            Andika <span class="text-indigo-500">Rizaldi</span>
        </h1>

        <p class="text-gray-400 mb-6">
            Fullstack Developer yang membangun website modern & scalable.
        </p>

        <div class="flex gap-4">
            <a href="#projects" class="bg-indigo-500 px-6 py-3 rounded-lg hover:bg-indigo-600">
                View Work
            </a>
            <a href="#contact" class="border border-gray-600 px-6 py-3 rounded-lg hover:bg-gray-800">
                Contact Me
            </a>
        </div>
    </div>

    <!-- IMAGE -->
    <div class="relative flex justify-center">

    <div class="absolute w-[520px] h-[520px] blur-[120px] 
    bg-indigo-500 opacity-30 blur-3xl rounded-full
    top-1/2 left-1/2 
    -translate-x-1/2 -translate-y-1/2 
    -translate-y-[200px]">
    </div>

    <!-- FOTO -->
    <img 
        src="{{ asset('images/profile/andikha.png') }}" 
        class="absolute bottom-[-300px] w-[700px] object-contain z-10 scale-105">
    </div>

</div>
</section>