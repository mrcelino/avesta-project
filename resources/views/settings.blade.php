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
                src="{{ $photoUrl }}" 
                alt="Profile picture" 
                class="w-full rounded-lg mb-4" 
                width="150" 
                height="150"
                />
                <!-- Input file yang tersembunyi -->
                <input 
                    type="file" 
                    wire:model="photo" 
                    accept="image/*" 
                    class="hidden"
                    id="photo-upload"
                    wire:key="photo-upload-input"
                />
                <!-- Tombol untuk upload foto -->
                <button 
                    type="button" 
                    class="w-full bg-pink text-white py-2 rounded-lg mb-4 font-semibold"
                    onclick="document.getElementById('photo-upload').click();"
                >
                    Upload Foto
                </button>
                <p class="text-sm text-gray-600">
                  Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
                </p>
              </div>
            </div>
            <!-- Section Form Pengaturan -->
            <div class="w-2/3 p-4 mt-10">
              <form wire:submit.prevent="updateSettings">
                  @csrf
                  <div class="mb-4 flex items-center">
                      <label class="w-1/4 font-semibold">Nama Depan</label>
                      <div class="flex-grow">
                          <input 
                              type="text" 
                              wire:model.defer="nama_depan"
                              class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                          />
                      </div>
                  </div>
                  
                  <div class="mb-4 flex items-center">
                      <label class="w-1/4 font-semibold">Nama Belakang</label>
                      <div class="flex-grow">
                          <input 
                              type="text" 
                              wire:model.defer="nama_belakang"
                              class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                          />
                      </div>
                  </div>
          
                  <!-- Tanggal Lahir -->
                  <div class="mb-4 flex items-center">
                      <label class="w-1/4 font-semibold">Tanggal Lahir</label>
                      <div class="flex-grow">
                          <input 
                              type="date" 
                              wire:model.defer="tanggal_lahir"
                              class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                          />
                      </div>
                  </div>
          
                  <!-- Jenis Kelamin -->
                  <div class="mb-4 flex items-center">
                      <label class="w-1/4 font-semibold">Jenis Kelamin</label>
                      <div class="flex-grow">
                          <select 
                              wire:model.defer="jenis_kelamin"
                              class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200">
                              <option value="">Pilih</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                          </select>
                      </div>
                  </div>

                  {{-- Email --}}
                  <div class="mb-4 flex items-center">
                    <label class="w-1/4 font-semibold">Email</label>
                    <div class="flex-grow">
                        <input 
                            type="text" 
                            wire:model.defer="email"
                            class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                        />
                    </div>
                </div>

                <div class="mb-4 flex items-center">
                  <label class="w-1/4 font-semibold">Nomor HP</label>
                  <div class="flex-grow">
                      <input 
                          type="text" 
                          wire:model.defer="no_telepon"
                          class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                      />
                  </div>
              </div>
          
                  <!-- Bank -->
                  <div class="mb-4 flex items-center">
                      <label class="w-1/4 font-semibold">Bank</label>
                      <div class="flex-grow">
                          <select 
                              wire:model.defer="bank"
                              class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200">
                              <option value="">Pilih</option>
                              <option value="Mandiri">Mandiri</option>
                              <option value="BCA">BCA</option>
                              <option value="BNI">BNI</option>
                              <option value="BRI">BRI</option>
                          </select>
                      </div>
                  </div>
          
                  <!-- Nomor Rekening -->
                  <div class="mb-4 flex items-center">
                      <label class="w-1/4 font-semibold">Nomor Rekening</label>
                      <div class="flex-grow">
                          <input 
                              type="text" 
                              wire:model.defer="nomor_rekening"
                              class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                          />
                      </div>
                  </div>

                  <div class="mb-4 flex items-center">
                    <label class="w-1/4 font-semibold">Alamat</label>
                    <div class="flex-grow">
                        <input 
                            type="text" 
                            wire:model.defer="alamat"
                            class="w-full border-2 border-pink rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-200" 
                        />
                    </div>
                </div>
          
                  <div class="text-right">
                      <button 
                          type="submit"
                          class="bg-pink text-white px-4 py-2 rounded-lg shadow hover:bg-pink-700">
                          Simpan
                      </button>
                  </div>
              </form>
              <dialog id="my_modal_3" class="modal">
                <div class="modal-box bg-pink max-w-xl">
                  <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost text-white absolute right-2 top-2">✕</button>
                  </form>
                  <h3 class="text-center text-3xl font-bold text-white">Perubahan <br>berhasil disimpan</h3>
                  <img class="px-6 py-4 flex justify-center mx-auto" src="{{ asset('image/settingssuccess.png') }}">
                </div>
              </dialog>
          </div>
          </div>
        </div>
      </main>
      <footer class="mt-24"> 
        <x-footer></x-footer>
      </footer>
    </div>
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('settings-updated', () => {
                setTimeout(() => {
                    const modal = document.getElementById('my_modal_3');
                    if (modal) {
                        modal.showModal();
                    } else {
                        console.error('Modal not found');
                    }
                }, 100);
            });
        });
    
        // Menutup modal ketika tombol close diklik
        document.addEventListener('DOMContentLoaded', () => {
            const closeButton = document.querySelector('#my_modal_3 button');
            if (closeButton) {
                closeButton.addEventListener('click', function () {
                    const modal = document.getElementById('my_modal_3');
                    if (modal) {
                        modal.close();
                    }
                });
            }
        });
    </script>