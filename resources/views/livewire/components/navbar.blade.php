<nav class="navbar navbar-expand-lg white-bg shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/mov-assets/logo/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/" wire:navigate>Beranda</a>
        <a class="nav-link" href="/product" wire:navigate>Produk</a>
        <a class="nav-link" href="#">Tentang Kami</a>
        <a class="nav-link" href="#">Artikel</a>
      </div>
      <div class="me-auto"></div>
      <div class="navbar-nav d-flex align-items-center">
        <a class="nav-link active" aria-current="page" href="/" wire:navigate>
          <button class="btn-skintest text-white rounded-pill border-0 fw-semibold py-2 px-5 outline-0">Ambil Skin
            Test</button>
        </a>
        <a class="nav-link" href="/product" wire:navigate><iconify-icon icon="bx:cart"
            class="fs-3"></iconify-icon></a>
        <a class="nav-link" href="#"><iconify-icon icon="mingcute:user-4-line" class="fs-3"></iconify-icon></a>
      </div>
    </div>
  </div>
</nav>