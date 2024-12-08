<div class="flex justify-center mt-4">
  @if ($paginator->onFirstPage())
      <span class="btn btn-lg glass rounded-2xl mx-2 disabled">Previous</span>
  @else
      <button class="btn btn-lg glass rounded-2xl mx-2" wire:click="previousPage" rel="prev" onclick="scrollToTop()">Previous</button>
  @endif

  @foreach ($elements as $element)
      @if (is_string($element))
          <span class="mx-2">{{ $element }}</span>
      @endif

      @if (is_array($element))
          @foreach ($element as $page => $url)
              @if ($page == $paginator->currentPage())
                  <button class="btn btn-lg glass rounded-2xl mx-2 text-white bg-pink">{{ $page }}</button>
              @else
                  <button class="btn btn-lg glass rounded-2xl mx-2" wire:click="gotoPage({{ $page }})" onclick="scrollToTop()">{{ $page }}</button>
              @endif
          @endforeach
      @endif
  @endforeach

  @if ($paginator->hasMorePages())
      <button class="btn btn-lg glass rounded-2xl mx-2" wire:click="nextPage" rel="next" onclick="scrollToTop()">Next</button>
  @else
      <span class="btn btn-lg glass rounded-2xl mx-2 disabled">Next</span>
  @endif
</div>

<script>
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Menambahkan efek smooth scroll
    });
}
</script>