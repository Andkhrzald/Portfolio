<!DOCTYPE html>
<html lang="en">
<head>
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

</body>
</html>