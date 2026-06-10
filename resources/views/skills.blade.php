<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<!-- DEFAULT TERANG -->
<body id="body" class="bg-sky-50 text-slate-700">

<section class="py-28">

<div class="max-w-6xl mx-auto px-8">

    <!-- TOP BAR -->
    <div class="flex justify-between items-center mb-8">

        <a href="/dashboard"
           class="bg-sky-500 text-white px-5 py-2 rounded-lg shadow hover:bg-sky-600 transition">
            ← Kembali
        </a>

        <!-- TOGGLE -->
        <button onclick="toggleMode()"
            class="bg-slate-800 text-white px-4 py-2 rounded-full text-sm">
            🌙 / ☀️
        </button>

    </div>

    <h2 class="text-4xl font-bold text-center text-sky-700 mb-4">
        Skills
    </h2>

    <p class="text-center text-slate-500 mb-12">
        Teknologi yang saya gunakan dalam pengembangan website modern.
    </p>

    <div class="grid md:grid-cols-2 gap-8">

        <!-- CARD 1 -->
        <div class="bg-white p-6 rounded-2xl shadow-lg">
            <div class="flex justify-between mb-2">
                <h3 class="font-bold text-lg">🌐 HTML</h3>
                <span class="text-sky-600 font-semibold">90%</span>
            </div>

            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-sky-500 h-3 rounded-full w-[90%]"></div>
            </div>

            <p class="mt-3 text-slate-500 text-sm">
                Membuat struktur website yang rapi, semantik, dan mudah dikembangkan.
            </p>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white p-6 rounded-2xl shadow-lg">
            <div class="flex justify-between mb-2">
                <h3 class="font-bold text-lg">🎨 CSS</h3>
                <span class="text-sky-600 font-semibold">85%</span>
            </div>

            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-sky-500 h-3 rounded-full w-[85%]"></div>
            </div>

            <p class="mt-3 text-slate-500 text-sm">
                Mendesain tampilan website yang responsif dan menarik.
            </p>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white p-6 rounded-2xl shadow-lg">
            <div class="flex justify-between mb-2">
                <h3 class="font-bold text-lg">⚡ Laravel</h3>
                <span class="text-sky-600 font-semibold">80%</span>
            </div>

            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-sky-500 h-3 rounded-full w-[80%]"></div>
            </div>

            <p class="mt-3 text-slate-500 text-sm">
                Membuat sistem login, dashboard, CRUD, dan aplikasi berbasis database.
            </p>
        </div>

        <!-- CARD 4 -->
        <div class="bg-white p-6 rounded-2xl shadow-lg">
            <div class="flex justify-between mb-2">
                <h3 class="font-bold text-lg">🗄️ MySQL</h3>
                <span class="text-sky-600 font-semibold">75%</span>
            </div>

            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-sky-500 h-3 rounded-full w-[75%]"></div>
            </div>

            <p class="mt-3 text-slate-500 text-sm">
                Mengelola database, tabel, relasi data, dan query SQL.
            </p>
        </div>

    </div>

</div>

</section>

<!-- TOGGLE SCRIPT (SAMA SEPERTI ABOUT) -->
<script>
function toggleMode() {
    const body = document.getElementById("body");

    body.classList.toggle("bg-sky-50");
    body.classList.toggle("bg-slate-900");

    body.classList.toggle("text-slate-700");
    body.classList.toggle("text-white");
}
</script>

</body>
</html>