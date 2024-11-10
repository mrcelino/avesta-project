<x-layouts.app>
    <div>
      <nav class="relative">
        <div class="navbar fixed mx-auto rounded-lg bg-pink shadow-md z-50">
            <div class="navbar-start">
                <img class="navbar-item h-12 m-2 ml-4" src="{{ asset('image/avesta2.png') }}">
                <div class="rounded-3xl p-1 mx-4 mt-2 bg-white text-pink group group hover:border hover:scale-110">
                    <x-navlink href="{{ route('home') }}" wire:navigate class="text-pink group-hover:text-heading">Mitra</x-navlink>
                </div>
            </div>
            <div class="navbar-center w-[600px]">
                <div class="bg-white flex px-4 py-3 rounded-full overflow-hidden w-full mx-auto">
                    <input type="email" placeholder="Cari Ayam" class="w-full outline-none text-black text-sm" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="fill-pink font-bold">
                        <path d="M190.707 180.101l-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"></path>
                    </svg>
                </div>
            </div>
            <div class="navbar-end">
                  <div class="flex items-center bg-white rounded-full text-pink px-4">
                      <img src="{{ asset('image/pin2.png') }}" alt="Location Icon" class="h-6 w-6"/>
                      <select class="select rounded-full text-pink bg-white font-semibold text-lg max-w-xs no-active-effect">
                          <option class="font-semibold">Pogung Baru</option>
                          <option class="font-semibold">Sendangadi</option>
                          <option class="font-semibold">Sinduadi</option>
                          <option class="font-semibold">Sumberadi</option>
                          <option class="font-semibold">Tirtoadi</option>
                          <option class="font-semibold">Tlogoadi</option>
                      </select>
                  </div>
                <x-button wire:navigate href="{{ route('checkout') }}" class="ml-4 btn-circle bg-white stroke-none hover:bg-white">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-pink">
                      <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                  </svg>                        
                  </x-button>
                <x-dropdown>
                    <div class="border-pink border-2 rounded-xl mt-2 mb-2 p-2">
                        <p class="font-semibold text-lg text-pink">Sintya Marisca</p>
                        <p class="text-base text-pink">sintyamarrisca@gmail.com</p>
                    </div>
                    <x-slot:trigger>
                        <x-button class="ml-5 btn-circle btn-outline bg-white stroke-none border-2 hover:bg-white border-white hover:border-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FB657A" class="size-6">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                            </svg>                     
                        </x-button>
                    </x-slot:trigger>
                    <x-menu-item wire:navigate href="{{ route('purchasehistory') }}" class="hover:bg-pink hover:text-white active:bg-heading" title="Riwayat Pembelian" />
                    <x-menu-item wire:navigate href="{{ route('settings') }}" class="hover:bg-pink hover:text-white active:bg-heading" title="Pengaturan" />
                    <x-menu-item class="hover:bg-pink hover:text-white active:bg-heading" title="Logout" />
                </x-dropdown>
            </div>
        </div>
    </nav>
      <main class="p-4">
        <div class="max-w-6xl mx-auto p-6 bg-white  mt-14">
          <h1 class="text-2xl font-semibold mb-2">Pengaturan</h1>
          <div class="flex rounded-2xl shadow-md border-2">
            <!-- Section Profil -->
            <div class="w-1/3 p-4">
              <h1 class="text-2xl font-semibold mb-4">Biodata Diri</h1>
              <div class="border-2 rounded-2xl p-4">
                <img 
                  src="https://storage.googleapis.com/a1aa/image/W7NZvnnlfo3SbCLfaVtYE3uXBeITyA7STLDMYrTujHBcfM6OB.jpg" 
                  alt="Profile picture of a person winking and wearing a beret" 
                  class="w-full rounded-lg mb-4" 
                  width="150" 
                  height="150"
                />
                <button class="w-full bg-pink text-white py-2 rounded-lg mb-4 font-semibold">Upload Foto</button>
                <p class="text-sm text-gray-600">
                  Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
                </p>
              </div>
            </div>
        
            <!-- Section Form Pengaturan -->
            <div class="w-2/3 p-4 mt-10">
              <div class="mb-4 flex items-center">
                <label class="w-1/4 font-semibold">Nama</label>
                <div class="flex-grow flex items-center">
                  <input 
                    type="text" 
                    class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                    value="Sintya Marisca"
                  />
                </div>
              </div>
            
              <div class="mb-4 flex items-center">
                <label class="w-1/4 font-semibold">Tanggal Lahir</label>
                <div class="flex-grow flex items-center">
                  <input 
                    type="text" 
                    class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                    value="10 April 1993"
                  />
                </div>
              </div>
            
              <div class="mb-4 flex items-center">
                <label class="w-1/4 font-semibold">Jenis Kelamin</label>
                <div class="flex-grow flex items-center">
                  <select class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200">
                    <option>Perempuan</option>
                    <option>Laki-laki</option>
                  </select>
                </div>
              </div>
            
              <div class="mb-4 flex items-center">
                <label class="w-1/4 font-semibold">Email</label>
                <div class="flex-grow flex items-center">
                  <input 
                    type="email" 
                    class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                    value="sintyamarisca@gmail.com"
                  />
                </div>
              </div>
            
              <div class="mb-4 flex items-center">
                <label class="w-1/4 font-semibold">Nomor HP</label>
                <div class="flex-grow flex items-center">
                  <input 
                    type="text" 
                    class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                    value="0812345678910"
                  />
                </div>
              </div>
            
              <div class="mb-4 flex items-center">
                <label class="w-1/4 font-semibold">Bank</label>
                <div class="flex-grow flex items-center">
                  <select class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200">
                    <option>Mandiri</option>
                    <option>BCA</option>
                    <option>BNI</option>
                    <option>BRI</option>
                    <option>Danamon</option>
                    <option>BSI</option>
                  </select>
                </div>
              </div>
            
              <div class="mb-4 flex items-center">
                <label class="w-1/4 font-semibold">Nomor Rekening</label>
                <div class="flex-grow flex items-center">
                  <input 
                    type="text" 
                    class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                    value="0023498734598"
                  />
                </div>
              </div>
            
              <div class="mb-4 flex items-center">
                <label class="w-1/4 font-semibold">Alamat</label>
                <div class="flex-grow flex items-center">
                  <input 
                    type="text" 
                    class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                    value="Pogung rt 01 rw 28, Sinduadi, Mlati, Sleman, 55284"
                  />
                </div>
              </div>
            
              <button class="w-full bg-pink text-white font-semibold py-2 rounded-lg">Simpan</button>
            </div>
            
            
            
          </div>
        </div>
      </main>
      <footer class="mt-24"> 
        <x-footer></x-footer>
      </footer>
    </div>
  </x-layouts.app>