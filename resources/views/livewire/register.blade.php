<div class="bg-pink flex items-center justify-center min-h-screen text-black">
    <div class="bg-white rounded-3xl shadow-lg p-12 flex" style="width: 1000px">
        <div class="w-5/12 flex items-center justify-center rounded-3xl bg-[#F99BA9]">
            <img alt="Illustration of two people shaking hands with documents flying around" class="rounded-lg p-10" height="400" src="{{ asset('image/register.png') }}" width="400" />
        </div>
        <div class="w-7/12 pl-8">
            <img alt="Avesta logo" class="mb-4 mx-auto" height="40" src="{{ asset('image/avesta.png') }}" width="100" />
            <h1 class="text-2xl font-bold mb-2 text-center">
                Yuk, Gabung dengan Avesta!
            </h1>
            <p class="mb-6 font-semibold text-center">
                Dapatkan harga ayam potong paling oke dan <br>rasakan mudahnya pesan online setiap hari!
            </p>
            <form wire:submit="register">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <input class="border border-gray-300 rounded-2xl p-2 bg-cInput" placeholder="Nama Depan" type="text" wire:model="nama_depan" required />
                    @error('nama_depan')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="border border-gray-300 rounded-2xl p-2 bg-cInput" placeholder="Nama Belakang" type="text" wire:model="nama_belakang" required />
                    @error('nama_belakang')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <input class="border border-gray-300 rounded-2xl p-2 w-full bg-cInput" placeholder="Email" type="email" wire:model="email" required />
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="border border-gray-300 rounded-2xl p-2 w-full bg-cInput" placeholder="Nomor HP" type="text" wire:model="no_telepon" required />
                    @error('no_telepon')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input class="border border-gray-300 rounded-2xl p-2 w-full bg-cInput" placeholder="Sandi" type="password" wire:model="password" required />
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input class="border border-gray-300 rounded-2xl p-2 w-full bg-cInput" placeholder="Konfirmasi Kata Sandi" type="password" wire:model="password_confirmation" required />
                    @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4 mx-1 flex items-center">
                    <input class="mr-2" id="terms" type="checkbox" />
                    <label class="text-sm font-semibold" for="terms">
                        Saya setuju dengan semua ketentuan dan kebijakan privasi
                    </label>
                </div>
                <button class="bg-pink text-white rounded-2xl p-2 w-full font-medium" type="submit">
                    Buat Akun
                </button>
                @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </form>
            <p class="text-center text-sm mt-4">
                Sudah punya akun?
                <a class="text-heading" href="login">
                    Masuk
                </a>
            </p>
        </div>
    </div>
</div>
