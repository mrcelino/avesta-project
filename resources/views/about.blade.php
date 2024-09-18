<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Document</title>
</head>
<body >
  <header>
    {{-- Navbar --}}
    <x-navigation-menu>
      <x-navlink href="#">Home</x-navlink>
      <x-navlink href="#">Produk</x-navlink>
      <x-navlink href="#">Tentang</x-navlink>
      <x-navlink href="#">Hubungi</x-navlink>
      <x-navlink href="#">Login</x-navlink>
      <x-navlink href="#">Register</x-navlink>
    </x-navigation-menu>
  </header>
  <main>
    <!-- Component -->
    <x-hero></x-hero>
    <x-features></x-features>
    <x-brand></x-brand>
    <x-testimonials></x-testimonials>
    <x-content></x-content>
    <x-content2></x-content2>
    <x-faq></x-faq>
    <x-footer></x-footer>
  </main>  
</div>
</body>
</html>
