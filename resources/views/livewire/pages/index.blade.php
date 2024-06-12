<div>
  @include('livewire.sections.skintest')

  <div id="banner">
    <img src="/mov-assets/img-banner-1.png" alt="banner" width="100%">
  </div>

  <section id="product-category" class="mt-5" style="margin-bottom: 150px;">
    <header class="text-center mb-5">
      <h3 class="text-uppercase green-color fw-bold">Panduan Pengguna</h3>
    </header>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12">
          <div class="card light-cream-bg rounded-4 border-0 p-5">
            <div class="card-body ">
              <img src="/mov-assets/user-journey.png" alt="" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="product-category" class="mt-5" style="margin-bottom: 200px;">
    <header class="text-center mb-5">
      <h3 class="text-uppercase green-color fw-bold">Kategori Produk</h3>
    </header>
    <div class="container">
      <div class="row d-flex justify-content-evenly ">
        <div class="col-md-4">
          <div class="card dark-cream-bg rounded-4 border-0">
            <div class="card-body ">
              <img src="/mov-assets/category-skincare.png" alt="" width="100%">
            </div>
          </div>
          <h4 class="text-uppercase fw-bold green-color text-center mt-4">Skincare</h4>
        </div>

        <div class="col-md-4">
          <div class="card dark-cream-bg rounded-4 border-0 py-2">
            <div class="card-body ">
              <img src="/mov-assets/category-bodycare.png" alt="" width="100%">
            </div>
          </div>
          <h4 class="text-uppercase fw-bold green-color text-center mt-4">Bodycare</h4>
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
