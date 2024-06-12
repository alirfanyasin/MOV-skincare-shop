<section id="product-recommendations" class="w-100">
  <div class="row py-5" id="tab">
    <div class="col">
      <div class="green-color text-center">
        <h1 class="fw-bold">REKOMENDASI PRODUK</h1>
        <h1 class="fw-light ">BUAT KULIT KAMU</h1>
      </div>

      <div class="d-flex justify-content-center mt-5">
        <a href="" class="text-decoration-none fs-5 text-uppercase mx-3 green-color fw-bold">Berminyak</a>|
        <a href="" class="text-decoration-none fs-5 text-uppercase mx-3 green-color fw-bold active">Normal</a>|
        <a href="" class="text-decoration-none fs-5 text-uppercase mx-3 green-color fw-bold">Kering</a>|
        <a href="" class="text-decoration-none fs-5 text-uppercase mx-3 green-color fw-bold">Kombinasi</a>|
        <a href="" class="text-decoration-none fs-5 text-uppercase mx-3 green-color fw-bold">Sensitif</a>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row d-lg-flex justify-content-evenly">
      @foreach ($products as $product)
        <div class="col-md-3">
          <a href="/product/{{ $product->slug }}" wire:navigate class="text-decoration-none d-block">
            <div class="card rounded-4 overflow-hidden position-relative ">
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
                    class="text-decoration-none py-2 mb-2 text-dark cream-bg text-center d-block rounded-2 fw-bold">
                    + Keranjang</a>
                  <a href=""
                    class="text-decoration-none cream-border py-2 mb-3 cream-color text-center d-block rounded-2 fw-bold">
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

    <div class="d-flex justify-content-center">
      <a href="/product" wire:navigate
        class="text-decoration-none text-white dark-cream-bg py-2 px-5 d-inline-block mt-5 rounded-pill fw-semibold">Rekomendasi
        Lainnya</a>
    </div>


  </div>
</section>
