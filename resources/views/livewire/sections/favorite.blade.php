<section id="favorite-section" class="my-5">


  <div class="container">
    <div class="row">
      <div class="col">
        <header class="text-center my-5">
          <h2 class="fw-light text-dark text-uppercase">Favorit Pelanggan</h2>
        </header>
      </div>
    </div>


    <div class="row">
      @foreach ($products as $product)
        <div class="col-md-3">
          <a href="/product/{{ $product->slug }}" wire:navigate class="text-decoration-none d-block">
            <div class="card rounded-4 overflow-hidden position-relative product-card">
              <div style="200px" class="overflow-hidden">
                <img src="{{ asset($product->image) }}" class="card-img-top h-100" alt="Product 1">
              </div>
              <div class="card-body">
                <h6 class="fw-bold text-dark">{{ $product->title }}</h6>
                <div id="" class="d-flex align-items-center">
                  <iconify-icon icon="material-symbols:star-rounded" width="1em" height="1em"
                    class="text-warning"></iconify-icon>
                  <iconify-icon icon="material-symbols:star-rounded" width="1em" height="1em"
                    class="text-warning"></iconify-icon>
                  <iconify-icon icon="material-symbols:star-rounded" width="1em" height="1em"
                    class="text-warning"></iconify-icon>

                  <iconify-icon icon="material-symbols:star-half-rounded" width="1em" height="1em"
                    class="text-warning"></iconify-icon>
                  <iconify-icon icon="ic:round-star-border" width="1em" height="1em"
                    class="text-warning"></iconify-icon>
                  <small class="text-main fs-10  ms-2 text-dark">5.0/5</small>
                </div>
                <div class="fw-bold mt-2 d-flex align-items-center text-dark">Rp.
                  {{ number_format($product->price, 0, ',', '.') }} &nbsp;
                  @if ($product->discount !== 0)
                    <span
                      class="px-2 py-1 orange-color fw-light rounded-pill discount fs-10">{{ $product->discount }}%</span>
                  @endif
                </div>
                <del class="text-secondary">Rp. 90.000</del>

                <div class="mt-4">
                  <a href="#" wire:click.prevent='add_to_cart({{ $product->id }}, {{ $product->price }})'
                    class="btn-add text-decoration-none py-2 mb-2 text-dark cream-bg text-center d-block rounded-2 fw-bold">
                    + Keranjang</a>
                  <a href="#" wire:click.prevent='buy_now({{ $product->id }}, {{ $product->price }})'
                    class="btn-buy text-decoration-none cream-border py-2 mb-3 cream-color text-center d-block rounded-2 fw-bold">
                    Beli Sekarang</a>
                </div>

              </div>
              <div class="position-absolute top-0" style="right: 20px;">
                <img src="/mov-assets/shape/label-sale.png" alt="">
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>

    <div class="row">
      <div class="col">
        <div class="d-flex justify-content-center">
          <a href="/product" wire:navigate
            class="text-decoration-none green-color white-bg shadow py-2 px-5 d-inline-block mt-5 rounded-pill fw-semibold">Produk
            Lainnya</a>
        </div>
      </div>
    </div>

  </div>
</section>
