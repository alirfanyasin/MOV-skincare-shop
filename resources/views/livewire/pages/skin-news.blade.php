<div class="" style="margin-top: 70px;">
  @livewire('sections.skin-type-banner')

  <div class="tab py-5 d-flex justify-content-center">
    <a href="/skin-type" wire:navigate
      class="text-decoration-none {{ Request::is('skin-type') ? 'dark-cream-color border-1' : 'text-dark' }} fw-semibold mx-3"
      style="{{ Request::is('skin-type') ? 'border-bottom: 2px solid #EE742B' : '' }}">Tipe Kulit</a>
    <a href="/skin-news" wire:navigate
      class="text-decoration-none {{ Request::is('skin-news') ? 'dark-cream-color border-1' : 'text-dark' }} fw-semibold mx-3"
      style="border-bottom: 2px solid #EE742B">Berita
      Skincare</a>
  </div>
  <article>
    {{-- Skin News start --}}
    @livewire('sections.skin-news')
    {{-- Skin News end --}}
  </article>
</div>
