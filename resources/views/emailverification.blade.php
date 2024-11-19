    <div class="bg-pink flex items-center justify-center min-h-screen text-black" style="background-image: url('/image/bghero.png');">
        <div class="bg-white rounded-3xl shadow-lg p-12 flex" style="width: 1000px;">
            <div class="w-5/12 flex items-center justify-center rounded-3xl bg-[#F99BA9]">
                <img alt="Illustration of two people shaking hands with documents flying around" class="rounded-lg p-4" height="400" src="{{ asset('image/login.png') }}" width="400"/>
            </div>
            <div class="w-7/12 pl-10">
                <img alt="Avesta logo" class="mb-4 mx-auto" height="40" src="{{ asset('image/avesta.png') }}" width="100"/>
                <h1 class="text-2xl font-bold mb-2 text-center">
                    Masukkan kode verifikasi
                </h1>
                <p class="mb-6 text-center">
                    Kode verifikasi telah dikirim melalui e-mail ke
                    f****c*****@gmail.com
                </p>
                <form wire:submit.prevent="submit"> 
                    @if (session()->has('error'))
                        <div class="mb-4 text-red-600 text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="flex space-x-5 justify-center mb-4">
                        <input wire:model="token_1" type="text" maxlength="1" class="w-16 h-16 bg-cInput rounded-2xl text-center text-2xl" />
                        <input wire:model="token_2" type="text" maxlength="1" class="w-16 h-16 bg-cInput rounded-2xl text-center text-2xl" />
                        <input wire:model="token_3" type="text" maxlength="1" class="w-16 h-16 bg-cInput rounded-2xl text-center text-2xl" />
                        <input wire:model="token_4" type="text" maxlength="1" class="w-16 h-16 bg-cInput rounded-2xl text-center text-2xl" />
                        <input wire:model="token_5" type="text" maxlength="1" class="w-16 h-16 bg-cInput rounded-2xl text-center text-2xl" />
                        <input wire:model="token_6" type="text" maxlength="1" class="w-16 h-16 bg-cInput rounded-2xl text-center text-2xl" />
                    </div>
                    <button class="bg-pink text-white rounded-2xl p-3 w-full font-medium" type="submit">
                        Selanjutnya
                    </button>
                    <p class="mt-4 text-sm text-center">
                        Mohon tunggu dalam <b>30 detik </b>untuk <span class="text-pink font-bold cursor-pointer">kirim ulang</span> kode.
                    </p>
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
