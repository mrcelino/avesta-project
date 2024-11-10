<div class="flex items-center mt-4">
    <button wire:click="decrement" class="border px-3 py-1 rounded-lg mr-1">-</button>
    <input class="w-full text-center border rounded-lg" type="text" value="{{ $quantity }}" readonly />
    <button wire:click="increment" class="border px-3 py-1 rounded-lg ml-1">+</button>
</div>