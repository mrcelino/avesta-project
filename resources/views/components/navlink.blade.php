<a href="{{ $href }}" 
   {{ $attributes->merge(['class' => 'mx-3 font-semibold transition duration-300 ' . ($class ?? '')]) }}
   @if($attributes->get('useWireNavigate', false)) wire:navigate @endif>
    {{ $slot }}
</a>
