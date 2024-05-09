<section id="skin-education" class="my-5 d-flex align-items-center justify-content-center" style="height: 80vh">
  <div class="text-center">
    <h1 class="text-uppercase light-green-color fw-bold fs-70">5 tipe kulit dan Tips</h1>
    <h1 class="text-capitalize fs-55 text-white fw-light">Yang harus kalian ketahui</h1>

    @if (Request::is('/') == true)
      <a href="{{ Request::is('/') ? '/skin-type' : '' }}" wire:navigate
        class="text-decoration-none text-white dark-cream-bg py-2 px-5 d-inline-block mt-5 rounded-pill fw-semibold">Pelajari
        Selengkapnya</a>
    @endif
  </div>
</section>
