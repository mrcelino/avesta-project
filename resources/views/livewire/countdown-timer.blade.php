<div class="flex justify-center text-pink items-center font-medium mb-2 gap-2">
    <span class="countdown text-3xl">
        <span style="--value:{{ $hours }};"></span>
    </span>
    <span class="text-2xl">:</span>
    <span class="countdown text-3xl">
        <span style="--value:{{ $minutes }};"></span>
    </span>
    <span class="text-2xl">:</span>
    <span class="countdown text-3xl">
        <span style="--value:{{ $seconds }};"></span>
    </span>
</div>

@script
<script>
    let interval;
    
    Livewire.on('countdown', () => {
        clearInterval(interval);
        interval = setInterval(() => {
            $wire.decrementTime();
        }, 1000);
    });
</script>
@endscript