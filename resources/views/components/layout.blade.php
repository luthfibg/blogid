<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <title>Blogid</title>
</head>
<body>
    <div class="min-h-full">
      <x-navbar />

      {{-- <x-header>{{ $title }}</x-header> --}}
    
      <main class="{{ $title == 'Semua Blog' ? 'md:bg-gray-50' : 'bg-white' }}">
        <div class="container mx-auto max-w-7xl px-4 py-3 md:py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
      </main>
    </div>
</body>
</html>