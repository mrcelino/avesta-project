<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Avesta Registration
  </title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 </head>
 <body class="bg-pink flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-3xl shadow-lg p-12 flex" style="width: 1000px;">
     <div class="w-5/12 flex items-center justify-center rounded-3xl bg-[#F99BA9]">
      <img alt="Illustration of two people shaking hands with documents flying around" class="rounded-lg p-4" height="400" src="{{ asset('image/login.png') }}" width="400"/>
     </div>
     <div class="w-7/12 pl-8">
      <img alt="Avesta logo" class="mb-4 mx-auto" height="40" src="{{ asset('image/avesta.png') }}" width="100"/>
      <h1 class="text-2xl font-bold mb-2 text-center">
       Yuk, Gabung dengan Avesta!
      </h1>
      <p class="mb-6 font-semibold text-center">
       Dapatkan harga ayam potong paling oke dan <br> rasakan mudahnya pesan online setiap hari!
      </p>
      <form>
       <div class="mb-4">
        <input class="border border-gray-300 rounded-2xl p-2 w-full bg-cInput" placeholder="Email" type="email"/>
       </div>
       <div class="mb-4">
        <input class="border border-gray-300 rounded-2xl p-2 w-full bg-cInput" placeholder="Sandi" type="password"/>
       </div>
       <div class="mb-4 mx-1 flex items-center">
        <input class="mr-2" id="terms" type="checkbox"/>
        <label class="text-sm font-semibold" for="terms">
         Ingat saya
        </label>
       </div>
       <button class="bg-pink text-white rounded-2xl p-2 w-full font-medium" type="submit">
        Login
       </button>
      </form>
      <p class="text-center text-sm mt-40">
       Belum punya akun?
       <a class="text-heading" href="#">
        Daftar
       </a>
      </p>
     </div>
    </div>
   </body>
</html>