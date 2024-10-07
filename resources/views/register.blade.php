<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Avesta Registration
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
   body {
            background-color: #F17486;
        }
  </style>
 </head>
 <body class="flex items-center justify-center min-h-screen">
  <div class="bg-white rounded-2xl shadow-lg p-8 flex" style="width: 800px;">
   <div class="w-1/2 flex items-center justify-center rounded-2xl bg-[#F99BA9]">
    <img alt="Illustration of two people shaking hands with documents flying around" class="rounded-lg" height="400" src="{{ asset('image/login.png') }}" width="400"/>
   </div>
   <div class="w-1/2 pl-8">
    <img alt="Avesta logo" class="mb-4 mx-auto" height="40" src="{{ asset('image/avesta.png') }}" width="100"/>
    <h1 class="text-2xl font-bold mb-2">
     Yuk, Gabung dengan Avesta!
    </h1>
    <p class="text-gray-600 mb-6">
     Dapatkan harga ayam potong paling oke dan rasakan mudahnya pesan online setiap hari!
    </p>
    <form>
     <div class="grid grid-cols-2 gap-4 mb-4">
      <input class="border border-gray-300 rounded-2xl p-2" placeholder="Nama Depan" type="text"/>
      <input class="border border-gray-300 rounded-2xl p-2" placeholder="Nama Belakang" type="text"/>
     </div>
     <div class="mb-4">
      <input class="border border-gray-300 rounded-2xl p-2 w-full" placeholder="Email" type="email"/>
     </div>
     <div class="mb-4">
      <input class="border border-gray-300 rounded-2xl p-2 w-full" placeholder="Nomor HP" type="text"/>
     </div>
     <div class="mb-4">
      <input class="border border-gray-300 rounded-2xl p-2 w-full" placeholder="Sandi" type="password"/>
     </div>
     <div class="mb-4">
      <input class="border border-gray-300 rounded-2xl p-2 w-full" placeholder="Konfirmasi Kata Sandi" type="password"/>
     </div>
     <div class="mb-4 flex items-center">
      <input class="mr-2" id="terms" type="checkbox"/>
      <label class="text-gray-600 text-sm" for="terms">
       Saya setuju dengan semua ketentuan dan kebijakan privasi
      </label>
     </div>
     <button class="bg-red-400 text-white rounded-lg p-2 w-full" type="submit">
      Buat Akun
     </button>
    </form>
    <p class="text-center text-gray-600 text-sm mt-4">
     Sudah punya akun?
     <a class="text-red-400" href="#">
      Masuk
     </a>
    </p>
   </div>
  </div>
 </body>
</html>