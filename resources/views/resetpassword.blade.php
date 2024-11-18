<x-layouts.app>
    @section('title', 'Login')
    <div class="bg-pink flex items-center justify-center min-h-screen text-black" style="background-image: url('/image/bghero.png');">
        <div class="bg-white rounded-3xl shadow-lg p-12 flex" style="width: 1000px;">
            <div class="w-5/12 flex items-center justify-center rounded-3xl bg-[#F99BA9]">
                <img alt="Illustration of two people shaking hands with documents flying around" class="rounded-lg p-4" height="400" src="{{ asset('image/login.png') }}" width="400"/>
            </div>
            <div class="w-7/12 pl-10">
                <img alt="Avesta logo" class="mb-4 mx-auto" height="40" src="{{ asset('image/avesta.png') }}" width="100"/>
                <h1 class="text-2xl font-bold mb-2 text-center">
                    Buat ulang kata sandi
                </h1>
                <p class="mb-6 text-center">
                    Masukkan kata sandi baru anda, pastikan terdiri lebih dari 8 karakter, terdapat angka dan simbol, dan uppercase. 
                </p>
                <form wire:submit.prevent="resetPassword"> 
                    @if (session()->has('error'))
                        <div class="mb-4 text-red-600 text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="mb-4">
                        <input wire:model="email" class="border border-gray-300 rounded-2xl p-3 pl-4 w-full bg-cInput" placeholder="E-mail" type="email"/>
                    </div>
                    <div class="mb-4">
                        <input wire:model="password" class="border border-gray-300 rounded-2xl p-3 pl-4 w-full bg-cInput" placeholder="Sandi" type="password"/>
                    </div>
                    <div class="mb-4">
                        <input wire:model="password_confirmation" class="border border-gray-300 rounded-2xl p-3 pl-4 w-full bg-cInput" placeholder="Konfirmasi kata sandi" type="password"/>
                    </div>
                    <button class="bg-pink text-white rounded-2xl p-3 w-full font-medium" type="submit">
                        Buat ulang kata sandi
                    </button>
                </form>
                <p class="text-center text-sm mt-40">
                    Belum punya akun?
                    <a wire:navigate class="text-heading" href="{{ route('register') }}">
                        Daftar
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-layouts.app>
