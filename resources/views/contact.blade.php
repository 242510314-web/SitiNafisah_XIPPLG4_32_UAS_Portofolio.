<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-sky-50">

<!-- CONTACT -->
<section class="py-28 bg-white">

<div class="max-w-5xl mx-auto px-8">

    <!-- Tombol Kembali -->
    <a href="/dashboard"
       class="inline-block mb-8 bg-sky-500 text-white px-5 py-2 rounded-lg shadow hover:bg-sky-600 transition">
        ← Kembali
    </a>

    <h2 class="text-4xl font-bold text-center text-sky-700 mb-12">
        Contact Me
    </h2>

    <div class="grid md:grid-cols-2 gap-10">

        <!-- INFO -->
        <div class="space-y-6">

            <div class="bg-sky-50 p-6 rounded-2xl shadow">
                <h3 class="font-bold text-lg text-sky-700">📧 Email</h3>
                <p class="text-slate-600">242510314@smkn4tks.sch.id</p>
            </div>

            <div class="bg-sky-50 p-6 rounded-2xl shadow">
                <h3 class="font-bold text-lg text-sky-700">📍 Location</h3>
                <p class="text-slate-600">Tasikmalaya, Indonesia</p>
            </div>

            <div class="bg-sky-50 p-6 rounded-2xl shadow">
                <h3 class="font-bold text-lg text-sky-700">💬 Response Time</h3>
                <p class="text-slate-600">Within 24 hours</p>
            </div>

        </div>

        <!-- FORM (SUDAH DIPERBAIKI) -->
        <div class="bg-sky-50 p-8 rounded-3xl shadow-lg">

            <form action="/contact/send" method="POST">
                @csrf

                <input type="text"
                    name="name"
                    class="w-full p-3 mb-4 rounded-xl border focus:outline-none focus:ring-2 focus:ring-sky-400"
                    placeholder="Nama">

                <input type="email"
                    name="email"
                    class="w-full p-3 mb-4 rounded-xl border focus:outline-none focus:ring-2 focus:ring-sky-400"
                    placeholder="Email">

                <textarea rows="5"
                    name="message"
                    class="w-full p-3 mb-4 rounded-xl border focus:outline-none focus:ring-2 focus:ring-sky-400"
                    placeholder="Pesan"></textarea>

                <button type="submit"
                    class="w-full bg-sky-500 text-white py-3 rounded-xl hover:bg-sky-600 transition">
                    Send Message
                </button>

            </form>

        </div>

    </div>

</div>

</section>

</body>
</html>