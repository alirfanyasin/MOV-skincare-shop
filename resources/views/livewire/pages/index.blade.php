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


  @livewire('sections.product-recommendation')

  @livewire('sections.favorite')


  @livewire('sections.blog')


  @livewire('sections.testimonial')

</div>
