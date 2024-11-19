<x-layouts.app>
    <div>
      <x-navbaruser></x-navbaruser>
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
              <dialog id="my_modal_3" class="modal">
                <div class="modal-box bg-pink max-w-xl">
                  <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost text-white absolute right-2 top-2">✕</button>
                  </form>
                  <h3 class="text-center text-3xl font-bold text-white">Perubahan <br>berhasil disimpan</h3>
                  <img class="px-6 py-4 flex justify-center mx-auto" src="{{ asset('image/settingssuccess.png') }}">
                </div>
            </dialog>
              <button class="w-full bg-pink text-white font-semibold py-2 rounded-lg" onclick="my_modal_3.showModal()">Simpan</button>
            </div>
            
            
            
          </div>
        </div>
      </main>
      <footer class="mt-24"> 
        <x-footer></x-footer>
      </footer>
    </div>
  </x-layouts.app>