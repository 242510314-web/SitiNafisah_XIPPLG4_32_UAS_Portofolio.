<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<!-- BODY TIDAK DIUBAH, hanya ditambah id -->
<body id="body" class="bg-sky-50">

<section class="py-16">

<div class="max-w-4xl mx-auto px-8">

    <!-- Tombol Kembali + MODE -->
    <div class="flex justify-between items-center mb-8">

        <a href="/dashboard"
           class="inline-block bg-sky-500 text-white px-5 py-2 rounded-lg shadow hover:bg-sky-600 transition">
            ← Kembali
        </a>

        <!-- TOGGLE MODE -->
        <button onclick="toggleMode()"
            class="bg-slate-800 text-white px-4 py-2 rounded-full text-sm">
            🌙 / ☀️
        </button>

    </div>

    <!-- ABOUT (TIDAK DIUBAH SAMA SEKALI) -->
    <div class="text-center">

        <h2 class="text-4xl font-bold text-sky-700 mb-10">
            About Me
        </h2>

        <div class="bg-white p-8 rounded-3xl shadow-lg text-left">

            <p class="text-slate-600 leading-8 text-lg mb-6">
                Saya adalah Web Developer yang fokus pada pembuatan website modern, responsif, dan user-friendly menggunakan Laravel dan Tailwind CSS.
            </p>

            <p class="text-slate-600 leading-8 text-lg mb-8">
                Saya memiliki ketertarikan pada UI/UX Design serta backend development, dan terbiasa membangun sistem seperti:
            </p>

            <div class="grid md:grid-cols-2 gap-4 mb-8">

                <div class="bg-sky-50 p-4 rounded-xl shadow hover:shadow-md transition">
                    ✔ Sistem Login & Register
                </div>

                <div class="bg-sky-50 p-4 rounded-xl shadow hover:shadow-md transition">
                    ✔ Dashboard Admin
                </div>

                <div class="bg-sky-50 p-4 rounded-xl shadow hover:shadow-md transition">
                    ✔ CRUD Database (MySQL)
                </div>

                <div class="bg-sky-50 p-4 rounded-xl shadow hover:shadow-md transition">
                    ✔ Portfolio & Landing Page
                </div>

            </div>

            <p class="text-slate-600 leading-8 text-lg">
                Saya terus mengembangkan skill di bidang Full-Stack Development untuk membuat aplikasi yang tidak hanya berfungsi, tetapi juga memiliki tampilan yang menarik dan nyaman digunakan.
            </p>

        </div>

    </div>

</div>

</section>

<!-- SCRIPT MODE (TAMBAHAN SAJA, TIDAK MENGUBAH HTML LAIN) -->
<script>
function toggleMode() {
    const body = document.getElementById("body");

    // BACKGROUND
    body.classList.toggle("bg-sky-50");
    body.classList.toggle("bg-slate-900");

    // TEXT
    body.classList.toggle("text-slate-700");
    body.classList.toggle("text-white");
}
</script>

</body>
</html>