<div class="flex items-center justify-center min-h-screen text-black" style="background-image: url('/image/bghero.png');">
    <div class="bg-white rounded-3xl shadow-lg p-12 flex" style="width: 1000px">
        <div class="w-5/12 flex items-center justify-center rounded-3xl bg-[#F99BA9]">
            <img alt="Illustration of two people shaking hands with documents flying around" class="rounded-lg p-10" height="400" src="{{ asset('image/register.png') }}" width="400" />
        </div>
        <div class="w-7/12 pl-16">
            <img alt="Avesta logo" class="mb-4 mx-auto" height="40" src="{{ asset('image/avesta.png') }}" width="100" />
            <h1 class="text-2xl font-bold mb-2 text-center">
                Yuk, Gabung dengan Avesta!
            </h1>
            <p class="mb-6 font-semibold text-center">
                Dapatkan harga ayam potong paling oke dan <br>rasakan mudahnya pesan online setiap hari!
            </p>
            <form wire:submit.prevent="register">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    @error('nama_depan') <span class="error">{{ $message }}</span> @enderror
                    <input wire:model="nama_depan" class="border border-gray-300 rounded-2xl p-p-3 pl-4 bg-cInput" placeholder="Nama Depan" type="text" />
                    @error('nama_belakang') <span class="error">{{ $message }}</span> @enderror
                    <input wire:model="nama_belakang" class="border border-gray-300 rounded-2xl p-3 pl-4 bg-cInput" placeholder="Nama Belakang" type="text" />
                </div>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                    <input wire:model="email" class="border border-gray-300 rounded-2xl p-3 pl-4 w-full bg-cInput" placeholder="Email" type="email" />
                    @error('no_telepon') <span class="error">{{ $message }}</span> @enderror
                    <input wire:model="no_telepon" class="border border-gray-300 rounded-2xl p-3 pl-4 w-full bg-cInput" placeholder="Nomor HP" type="text" />
                </div>
                <div class="mb-4">
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                    <input wire:model="password" class="border border-gray-300 rounded-2xl p-3 pl-4 w-full bg-cInput" placeholder="Sandi" type="password" />
                </div>
                <div class="mb-4">
                    <input wire:model="password_confirmation" class="border border-gray-300 rounded-2xl p-3 pl-4 w-full bg-cInput" placeholder="Konfirmasi Kata Sandi" type="password" />
                </div>
                <div class="mb-4 mx-1 flex items-center">
                    <input class="mr-2" id="terms" type="checkbox" />
                    <label class="text-sm font-semibold" for="terms">
                        Saya setuju dengan semua ketentuan dan kebijakan privasi
                    </label>
                </div>
                <button class="bg-pink text-white rounded-2xl p-3 pl-4 w-full font-medium" type="submit">
                    Buat Akun
                </button>
            </form>
            <p class="text-center text-sm mt-10">
                Sudah punya akun?
                <a wire:navigate class="text-heading" href="{{ route('login') }}">
                    Masuk
                </a>
            </p>
        </div>
    </div>
</div>