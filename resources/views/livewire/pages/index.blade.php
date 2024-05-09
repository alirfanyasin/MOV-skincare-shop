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



  @livewire('sections.skin-type-banner')


  @livewire('sections.new-product')


  @livewire('sections.product-recommendation')

  @livewire('sections.favorite')


  @livewire('sections.blog')


  @livewire('sections.testimonial')

</div>
