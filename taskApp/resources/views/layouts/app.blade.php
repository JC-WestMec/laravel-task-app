<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Task App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="mx-auto mx-w-2xl bg-gradient-to-bl from-emerald-600 to-lime-100">
    <nav class="bg-lime-100/60 p-4">
<h1 class="text-2xl font-bold text-stone-600">𝕿𝖆𝖘𝖐𝖘 & 𝖂𝖍𝖆𝖙𝖓𝖔𝖙</h1>
    </nav>
<main class="p-4">
    @yield('content')
</main>
    <!-- @vite('resources/js/app.js') -->
</body>
</html>