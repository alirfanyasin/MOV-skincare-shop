<div>
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset($product->image) }}" alt="Img Product 1" width="100%">
    </div>
    <div class="col-md-6">
      <h3 class="fw-bold text-dark">{{ $product->title }}</h3>
      <div class="text-secondary">
        <span class="me-2">154 Penilaian</span>|
        <span class="mx-2">203 Terjual</span>|
        <span>186 Ulasan</span>
      </div>
      <div id="" class="d-flex align-items-center">
        <iconify-icon icon="material-symbols:star-rounded" width="2em" height="2em"
          class="text-warning"></iconify-icon>
        <iconify-icon icon="material-symbols:star-rounded" width="2em" height="2em"
          class="text-warning"></iconify-icon>
        <iconify-icon icon="material-symbols:star-rounded" width="2em" height="2em"
          class="text-warning"></iconify-icon>

        <iconify-icon icon="material-symbols:star-half-rounded" width="2em" height="2em"
          class="text-warning"></iconify-icon>
        <iconify-icon icon="ic:round-star-border" width="2em" height="2em" class="text-warning"></iconify-icon>
        <small class="text-main fs-20  ms-2 my-3 text-dark">5.0/5</small>
      </div>
      <div class="price">
        <h2 class="text-dark fw-semibold ">Rp. {{ number_format($product->price, 0, ',', '.') }}</h2>
        @if ($product->discount !== 0)
          <span class="orange-color rounded-pill px-2 py-1 discount">{{ $product->discount }}%</span>
          <del class="text-secondary">Rp. 90.000</del>
        @endif
        <p class="text-secondary my-3">Tersisah {{ $product->stock }} produk</p>
      </div>
      <div class="mt-5">
        <a href="{{ Auth::check() ? '#' : 'login' }}"
          @auth wire:click.prevent='add_to_cart({{ $product->id }}, {{ $product->price }})' @endauth
          class="btn-add text-decoration-none py-3 me-2 px-5 text-dark cream-bg text-center rounded-2 fw-bold">
          + Keranjang</a>

        <a href="{{ Auth::check() ? '#' : 'login' }}"
          @auth wire:click.prevent='buy_now({{ $product->id }}, {{ $product->price }})' @endauth
          class="btn-buy text-decoration-none cream-border py-3 px-5 mb-3 cream-color text-center rounded-2 fw-bold">
          Beli Sekarang</a>
      </div>
    </div>
  </div>
  <div class="description-product mb-3 mt-5">
    <div class="row">
      <div class="col">
        <header>
          <h3 class="fw-bold text-capitalize text-dark">Deskripsi Produk</h3>
        </header>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p>{{ $product->description }}</p>
      </div>
    </div>
  </div>

  <div class="review-product mb-5">
    <div class="row">
      <div class="col">
        <header>
          <h3 class="fw-bold text-capitalize text-dark">Ulasan</h3>
        </header>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card rounded-4">
          <div class="card-body">
            <div id="" class="d-flex align-items-center">
              <iconify-icon icon="material-symbols:star-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
              <iconify-icon icon="material-symbols:star-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
              <iconify-icon icon="material-symbols:star-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>

              <iconify-icon icon="material-symbols:star-half-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
              <iconify-icon icon="ic:round-star-border" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
            </div>
            <div class="my-2">
              <h5 class="fw-bold d-flex align-items-center">Sarah M. <iconify-icon icon="icon-park-solid:check-one"
                  class="ms-2 text-success"></iconify-icon></h5>

              <p>“Serums are good for all skin types and all skin concerns. However, make sure your skin doesn't show
                any negative reactions to the serum, such as purging, breakouts, acne, itchiness, or dryness. “</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card rounded-4">
          <div class="card-body">
            <div id="" class="d-flex align-items-center">
              <iconify-icon icon="material-symbols:star-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
              <iconify-icon icon="material-symbols:star-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
              <iconify-icon icon="material-symbols:star-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>

              <iconify-icon icon="material-symbols:star-half-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
              <iconify-icon icon="ic:round-star-border" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
            </div>
            <div class="my-2">
              <h5 class="fw-bold d-flex align-items-center">Sarah M. <iconify-icon icon="icon-park-solid:check-one"
                  class="ms-2 text-success"></iconify-icon></h5>

              <p>“Serums are good for all skin types and all skin concerns. However, make sure your skin doesn't show
                any negative reactions to the serum, such as purging, breakouts, acne, itchiness, or dryness. “</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card rounded-4">
          <div class="card-body">
            <div id="" class="d-flex align-items-center">
              <iconify-icon icon="material-symbols:star-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
              <iconify-icon icon="material-symbols:star-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
              <iconify-icon icon="material-symbols:star-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>

              <iconify-icon icon="material-symbols:star-half-rounded" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
              <iconify-icon icon="ic:round-star-border" width="1.5em" height="1.5em"
                class="text-warning"></iconify-icon>
            </div>
            <div class="my-2">
              <h5 class="fw-bold d-flex align-items-center">Sarah M. <iconify-icon icon="icon-park-solid:check-one"
                  class="ms-2 text-success"></iconify-icon></h5>

              <p>“Serums are good for all skin types and all skin concerns. However, make sure your skin doesn't show
                any negative reactions to the serum, such as purging, breakouts, acne, itchiness, or dryness. “</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col d-flex justify-content-center">
        <a href="" wire:navigate
          class="text-decoration-none text-dark shadow white-bg py-2 px-5 d-flex align-items-center  rounded-pill fw-semibold">Lebih
          banyak <iconify-icon icon="iconamoon:arrow-down-2-bold" class="ms-2"></iconify-icon></a>
      </div>
    </div>

  </div>

</div>
