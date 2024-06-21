<nav class="navbar navbar-expand-lg white-bg shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/" wire:navigate>
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
        <a class="nav-link" href="/about-us" wire:navigate>Tentang Kami</a>
        <a class="nav-link" href="/skin-news" wire:navigate>Artikel</a>
      </div>
      <div class="me-auto"></div>
      <div class="navbar-nav d-flex align-items-center">
        <a class="nav-link active" aria-current="page" href="/skintest/name" wire:navigate>
          <button class="btn-skintest text-white rounded-pill border-0 fw-semibold py-2 px-5 outline-0">Ambil Skin
            Test</button>
        </a>

        <a class="nav-link  position-relative mx-2" href="/cart">
          <iconify-icon icon="bx:cart" class="fs-3"></iconify-icon>
          @if ($cartCount > 0)
            <span class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-danger">
              {{ $cartCount }}
              <span class="visually-hidden">unread messages</span>
            </span>
          @endif
        </a>
        <div class="nav-link">
          <a wire:navigate href="/my-profile" class="bg-transparent text-dark text-decoration-none">
            <iconify-icon icon="mingcute:user-4-line" class="fs-3"></iconify-icon>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
