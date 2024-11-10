<div data-aos="fade-up" data-aos-duration="1000" class="mt-14 flex items-center justify-center ">
  <div class="flex">
    <img 
      alt="A person in a white coat standing in a poultry farm with chickens in the background" 
      class="rounded-xl w-1/2"  
      src="{{ asset('image/mitratestimonials.jpeg') }}"/>
      
    <div class="ml-20 w-1/2">
      <h2 class="text-3xl font-semibold text-pink mb-6">
        Ingin Tahu Lebih Lanjut?
      </h2>
      <p class="text-pink mb-6 leading-loose">
        Dapatkan informasi lebih lengkap dan mulailah manfaatkan layanan kami.
      </p>
      <div class="flex space-x-4">
        <a wire:navigate href="{{ route('register') }}" class="bg-pink text-white font-semibold py-3 px-4 rounded-full">
          Daftar Sekarang
        </a>
        <button class="border border-pink text-pink font-semibold py-2 px-4 rounded-full">
          Lihat Selengkapnya
        </button>
      </div>
    </div>
  </div>
</div>
