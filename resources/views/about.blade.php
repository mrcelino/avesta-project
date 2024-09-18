<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Document</title>
</head>
<body>
  <div class="navbar bg-yellow-400">
    <div class="flex-1">
      <img class="btn btn-ghost hover:bg-base-100 text-xl" src="{{ asset('image/avesta.png') }}"></img>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        <li><a>Home</a></li>
        <li><a>Produk</a></li>
        <li><a>Tentang</a></li>
        <li><a>Hubungi</a></li>
        <li><a>Login</a></li>
        <li><a>Register</a></li>
      </ul>
    </div>
  </div>
</body>
</html>
