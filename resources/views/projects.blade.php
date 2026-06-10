<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-sky-50">

<!-- PROJECTS -->
<section class="py-28">

<div class="max-w-6xl mx-auto px-8">

    <!-- Tombol Kembali -->
    <a href="/dashboard"
       class="inline-block mb-8 bg-sky-500 text-white px-5 py-2 rounded-lg shadow hover:bg-sky-600 transition">
        ← Kembali
    </a>

    <!-- Judul -->
    <h2 class="text-4xl font-bold text-center text-sky-700 mb-12">
        Projects
    </h2>

    <!-- Cards -->
    <div class="grid md:grid-cols-3 gap-6">

        <!-- Portfolio Website -->
        <div class="bg-white p-6 rounded-2xl shadow hover:-translate-y-2 hover:shadow-xl transition">
            <h3 class="font-bold text-xl text-sky-700 mb-3">
                Portfolio Website
            </h3>

            <p class="text-slate-600 text-sm mb-4">
                Website personal berbasis Laravel untuk menampilkan profil,
                skill, pengalaman, project, dan kontak.
            </p>

            <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-xs">
                    Laravel
                </span>
                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-xs">
                    MySQL
                </span>
                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-xs">
                    Tailwind CSS
                </span>
            </div>

            <ul class="text-sm text-slate-600 list-disc pl-5">
                <li>Menampilkan profil pribadi</li>
                <li>Menampilkan skill dan pengalaman</li>
                <li>Halaman project</li>
                <li>Form kontak</li>
                <li>Responsive design</li>
            </ul>
        </div>

        <!-- Sistem Kasir -->
        <div class="bg-white p-6 rounded-2xl shadow hover:-translate-y-2 hover:shadow-xl transition">
            <h3 class="font-bold text-xl text-sky-700 mb-3">
                Sistem Kasir
            </h3>

            <p class="text-slate-600 text-sm mb-4">
                Aplikasi kasir berbasis web untuk membantu transaksi
                penjualan secara cepat dan efisien.
            </p>

            <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-xs">
                    Laravel
                </span>
                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-xs">
                    MySQL
                </span>
            </div>

            <ul class="text-sm text-slate-600 list-disc pl-5">
                <li>Login Admin</li>
                <li>Kelola Produk</li>
                <li>Transaksi Penjualan</li>
                <li>Cetak Struk</li>
                <li>Laporan Penjualan</li>
            </ul>
        </div>

        <!-- Inventory System -->
        <div class="bg-white p-6 rounded-2xl shadow hover:-translate-y-2 hover:shadow-xl transition">
            <h3 class="font-bold text-xl text-sky-700 mb-3">
                Inventory System
            </h3>

            <p class="text-slate-600 text-sm mb-4">
                Sistem manajemen stok barang untuk memantau barang masuk,
                barang keluar, dan ketersediaan stok.
            </p>

            <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-xs">
                    Laravel
                </span>
                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-xs">
                    MySQL
                </span>
            </div>

            <ul class="text-sm text-slate-600 list-disc pl-5">
                <li>Kelola Data Barang</li>
                <li>Monitoring Stok</li>
                <li>Barang Masuk & Keluar</li>
                <li>Pencarian Data Barang</li>
                <li>Laporan Inventaris</li>
            </ul>
        </div>

    </div>

</div>

</section>

</body>
</html>