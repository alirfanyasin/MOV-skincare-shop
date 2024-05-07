<div>
  @include('livewire.sections.skintest')

  <div id="banner">
    <img src="/mov-assets/img-banner-1.png" alt="banner" width="100%">
  </div>

  <section id="product-category" class="mt-5">
    <header class="text-center mb-5">
      <h3 class="text-uppercase green-color fw-bold">Kategori Produk</h3>
    </header>
    <div class="container">
      <div class="row d-flex justify-content-evenly ">
        <div class="col-md-4">
          <div class="card dark-cream-bg rounded-4 border-0">
            <div class="card-body ">
              <img src="/mov-assets/product/test-pd-1.png" alt="" width="100%">
            </div>
          </div>
          <h4 class="text-uppercase fw-bold green-color text-center mt-4">Skincare</h4>
        </div>
        <div class="col-md-4">
          <div class="card dark-cream-bg rounded-4 border-0">
            <div class="card-body ">
              <img src="/mov-assets/product/test-pd-1.png" alt="" width="100%">
            </div>
          </div>
          <h4 class="text-uppercase fw-bold green-color text-center mt-4">Skincare</h4>
        </div>
      </div>
    </div>
  </section>



  <section id="skin-education" class="my-5 d-flex align-items-center justify-content-center" style="height: 80vh">
    <div class="text-center">
      <h1 class="text-uppercase light-green-color fw-bold fs-70">5 tipe kulit dan Tips</h1>
      <h1 class="text-capitalize fs-55 text-white fw-light">Yang harus kalian ketahui</h1>

      <a href="" wire:navigate
        class="text-decoration-none text-white dark-cream-bg py-2 px-5 d-inline-block mt-5 rounded-pill fw-semibold">Pelajari
        Selengkapnya</a>
    </div>
  </section>


  @livewire('sections.new-product')


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
        <div class="col-md-3">
          <div class="card border-0 rounded-4 shadow overflow-hidden">
            <img src="/mov-assets/product/img-product-1.png" class="card-img-top" alt="Product 1">
            <div class="card-body">
              <h6 class="fw-bold">Serum Vitamin C</h6>
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
                <small class="text-main fs-10  ms-2">5.0/5</small>
              </div>
              <div class="fw-bold mt-2 d-flex align-items-center">Rp. 85.000 &nbsp; <span
                  class="px-2 py-1 orange-color fw-light rounded-pill discount fs-10">20%</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-0 rounded-4 shadow overflow-hidden">
            <img src="/mov-assets/product/img-product-2.png" class="card-img-top" alt="Product 1">
            <div class="card-body">
              <h6 class="fw-bold">Serum Vitamin C</h6>
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
                <small class="text-main fs-10  ms-2">5.0/5</small>
              </div>
              <div class="fw-bold mt-2 d-flex align-items-center">Rp. 85.000 &nbsp; <span
                  class="px-2 py-1 orange-color fw-light rounded-pill discount fs-10">20%</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-0 rounded-4 shadow overflow-hidden">
            <img src="/mov-assets/product/img-product-3.png" class="card-img-top" alt="Product 1">
            <div class="card-body">
              <h6 class="fw-bold">Serum Vitamin C</h6>
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
                <small class="text-main fs-10  ms-2">5.0/5</small>
              </div>
              <div class="fw-bold mt-2 d-flex align-items-center">Rp. 85.000 &nbsp; <span
                  class="px-2 py-1 orange-color fw-light rounded-pill discount fs-10">20%</span></div>
            </div>
          </div>
        </div>

      </div>

      <div class="d-flex justify-content-center">
        <a href="" wire:navigate
          class="text-decoration-none text-white dark-cream-bg py-2 px-5 d-inline-block mt-5 rounded-pill fw-semibold">Rekomendasi
          Lainnya</a>
      </div>


    </div>
  </section>


</div>
