<x-layouts.app>
    @section('title', 'Login')
    <div class="bg-pink flex items-center justify-center min-h-screen text-black">
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
    </div>
</x-layouts.app>
