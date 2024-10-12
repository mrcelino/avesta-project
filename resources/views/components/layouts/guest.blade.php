{{-- resources/views/components/layouts/guest.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <title>@yield('title', 'Guest Page')</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <main>
        @yield('content') <!-- Konten utama akan ditampilkan di sini -->
    </main>
    @livewireScripts
</body>
</html>
