<!DOCTYPE html>
<html>
<head>
    <title>Inbox Messages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-sky-50 p-10">

<h1 class="text-3xl font-bold mb-6">Inbox Pesan</h1>

<div class="space-y-4">

@foreach($messages as $msg)
    <div class="p-5 bg-white shadow rounded-xl">
        <p><b>Nama:</b> {{ $msg->name }}</p>
        <p><b>Email:</b> {{ $msg->email }}</p>
        <p><b>Pesan:</b> {{ $msg->message }}</p>
        <p class="text-sm text-gray-400">{{ $msg->created_at }}</p>
    </div>
@endforeach

</div>

</body>
</html>