<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Siti Portofolio</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
html {
    scroll-behavior: smooth;
}
body {
    font-family: ui-sans-serif, system-ui;
}
</style>

</head>

<body class="bg-gradient-to-br from-sky-50 via-white to-sky-100 text-slate-700">

<!-- NAVBAR -->
<nav class="fixed top-0 left-0 w-full backdrop-blur-md bg-white/70 border-b border-sky-100 z-50 shadow-sm">

    <div class="max-w-7xl mx-auto px-8 py-4 flex justify-between items-center">

        <h1 class="text-2xl font-bold text-sky-700">
            Siti Portofolio
        </h1>

        <ul class="hidden md:flex gap-8 text-sky-600 font-medium">
            <li><a href="/dashboard" class="hover:text-sky-900">Home</a></li>
            <li><a href="/about" class="hover:text-sky-900">About</a></li>
            <li><a href="/skills" class="hover:text-sky-900">Skills</a></li>
            <li><a href="/experience" class="hover:text-sky-900">Experience</a></li>
            <li><a href="/projects" class="hover:text-sky-900">Projects</a></li>
            <li><a href="/contact" class="hover:text-sky-900">Contact</a></li>
        </ul>

        <!-- LOGOUT -->
        <form action="/logout" method="POST" class="inline">
            @csrf
            <button type="submit"
                class="bg-sky-500 text-white px-4 py-2 rounded-full shadow hover:bg-sky-600 transition">
                Logout
            </button>
        </form>

    </div>

</nav>

<!-- HERO -->
<section id="home" class="min-h-screen flex items-center pt-24">

<div class="max-w-7xl mx-auto px-8 grid md:grid-cols-2 gap-10 items-center">

    <div>

        <div class="flex gap-2 mb-4">
            <span class="px-3 py-1 text-sm bg-sky-100 text-sky-700 rounded-full">💼 Available</span>
            <span class="px-3 py-1 text-sm bg-green-100 text-green-700 rounded-full">⚡ Fast Learner</span>
        </div>

        <p class="text-sky-500 text-xl mb-2">Hello, I'm</p>

        <h1 class="text-6xl font-bold leading-tight">
            Siti <span class="text-sky-600">Nafisah</span>
            <span class="text-sky-500">Al Azizah</span>
        </h1>

        <h2 class="text-2xl mt-4 text-sky-600 font-medium">
            Web Developer & UI/UX Designer
        </h2>

        <p class="mt-6 text-slate-600 leading-7">
            Saya fokus membangun website modern dan responsif.
        </p>

        <p class="mt-4 text-sm text-slate-500">
            HTML • CSS • Laravel • MySQL • Tailwind
        </p>

        <div class="mt-8 flex gap-4 flex-wrap">

            <a href="/contact"
               class="bg-sky-500 text-white px-6 py-3 rounded-full shadow hover:bg-sky-600 transition">
                Hire Me
            </a>

            <a href="/projects"
               class="border border-sky-300 text-sky-600 px-6 py-3 rounded-full hover:bg-sky-500 hover:text-white transition">
                View Projects
            </a>

        </div>

    </div>

    <div class="flex justify-center">
        <div class="relative">
            <div class="absolute -inset-6 bg-sky-200 blur-2xl rounded-full opacity-50"></div>

            <img src="{{ asset('images/foto.png') }}" 
                 alt="Foto Siti Nafisah Al Azizah"
                 class="relative w-80 h-80 rounded-full border-8 border-white shadow-2xl">
        </div>
    </div>

</div>

</section>

</body>
</html>