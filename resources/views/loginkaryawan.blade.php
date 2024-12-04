<div class="bg-pink flex items-center justify-center h-screen text-black"  style="background-image: url('/image/bghero.png');">
    <div class="bg-white rounded-3xl shadow-lg p-12 flex h-5/6" style="width: 1000px;">
        <div class="w-5/12 flex items-center justify-center rounded-3xl bg-[#F99BA9]">
            <img alt="Illustration of two people shaking hands with documents flying around" class="rounded-lg p-4" height="400" src="{{ asset('image/securelogin.png') }}" width="400" />
        </div>
        <div class="w-7/12 pl-20">
            <img alt="Avesta logo" class="mb-4 mx-auto" height="40" src="{{ asset('image/avesta.png') }}" width="100" />
            <h1 class="text-2xl font-bold mb-2 text-center">
                Selamat Datang di Akunmu! Mari Jaga Keamanan Bersama
            </h1>
            <p class="mb-10     font-medium text-center">
                Demi keamanan akun, silakan buat kata sandi baru yang hanya kamu yang tahu.
            </p>
            @if (session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
            <form wire:submit="authenticate">
                <div class="mb-4">
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                    <input wire:model="password" class="border border-gray-300 rounded-2xl p-3 pl-4 w-full bg-cInput" placeholder="Kata Sandi Baru" type="password" />
                </div>
                <div class="mb-8">
                    <input wire:model="password_confirmation" class="border border-gray-300 rounded-2xl p-3 pl-4 w-full bg-cInput" placeholder="Konfirmasi Kata Sandi" type="password" />
                </div>
                <button class="bg-pink text-white rounded-2xl p-2 w-full font-medium" type="submit">
                    Ganti Password
                </button>
            </form>
        </div>
    </div>
</div>