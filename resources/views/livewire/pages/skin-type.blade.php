<div class="" style="margin-top: 70px;">
  @livewire('sections.skin-type-banner')

  <div class="tab py-5 d-flex justify-content-center">
    <a href="/skin-type" wire:navigate class="text-decoration-none text-dark fw-semibold mx-3">Tipe Kulit</a>
    <a href="/skin-news" wire:navigate class="text-decoration-none text-dark fw-semibold mx-3">Berita Skincare</a>
  </div>

  <article>
    {{-- Skin Type start --}}
    @livewire('sections.skin-type')
    {{-- Skin Type end --}}





  </article>

</div>
