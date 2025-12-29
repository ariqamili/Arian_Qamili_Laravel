<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <title>Workopia</title>
</head>

<body class="bg-gray-100">
<x-header />
<!-- Display alert messages -->
@if (session('success'))
    <x-alert type="success" message="{{ session('success') }}" />
@endif

@if (session('error'))
    <x-alert type="error" message="{{ session('error') }}" />
@endif

<main class="container mx-auto p-4 mt-4">{{ $slot }}</main>
</body>
</html>
