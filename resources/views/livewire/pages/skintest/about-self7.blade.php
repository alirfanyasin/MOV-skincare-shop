<div class="container">
  <div class="question text-center mt-5 mb-3">
    <h1 class="fw-bold">Tipe jerawat apa yang biasanya muncul pada kulitmu?</h1>
  </div>
  <form action="/skintest/gender" wire:submit.prevent>
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <div class="row d-flex justify-content-between">
          <div class="col-md-3">
            <a href="/skintest/the-skin-condition-you-want" wire:navigate class="d-blok text-decoration-none">
              <div class="card p-0 bg-transparent rounded-4 overflow-hidden border-0">
                <div class="card-body p-0">
                  <img src="/mov-assets/komedo.png" alt="" width="100%">
                </div>
              </div>
              <h6 class="text-start text-dark fw-bold mt-4">Komedo</h6>
              <small class="text-dark">Benjolan merah cenderung kecil dengan titik putih di tengah.</small>
            </a>
          </div>
          <div class="col-md-3">
            <a href="/skintest/the-skin-condition-you-want" wire:navigate class="d-blok text-decoration-none">
              <div class="card p-0 bg-transparent rounded-4 overflow-hidden border-0">
                <div class="card-body p-0">
                  <img src="/mov-assets/postula.png" alt="" width="100%">
                </div>
              </div>
              <h6 class="text-start text-dark fw-bold mt-4">Postula</h6>
              <small class="text-dark">Benjolan besar, merah, dan tidak begitu keras. Biasanya, terdapat titik putih di
                tengah yang berisi cairan kuning atau putih.</small>
            </a>
          </div>
          <div class="col-md-3">
            <a href="/skintest/the-skin-condition-you-want" wire:navigate class="d-blok text-decoration-none">
              <div class="card p-0 bg-transparent rounded-4 overflow-hidden border-0">
                <div class="card-body p-0">
                  <img src="/mov-assets/nadula.png" alt="" width="100%">
                </div>
              </div>
              <h6 class="text-start text-dark fw-bold mt-4">Nodula</h6>
              <small class="text-dark">Benjolan keras, besar, yang meradang, berada jauh di bawah permukaan kulit dan
                biasanya tidak memiliki cairan.</small>
            </a>
          </div>
          <div class="col-md-3">
            <a href="/skintest/the-skin-condition-you-want" wire:navigate class="d-blok text-decoration-none">
              <div class="card p-0 bg-transparent rounded-4 overflow-hidden border-0">
                <div class="card-body p-0">
                  <img src="/mov-assets/kistik.png" alt="" width="100%">
                </div>
              </div>
              <h6 class="text-start text-dark fw-bold mt-4">Kistik</h6>
              <small class="text-dark">Benjolan besar, keras, merah dan berada jauh di dalam permukaan kulit biasanya
                berisi cairan putih, dan sakit kalau disentuh.</small>
            </a>
          </div>
        </div>
      </div>
    </div>
  </form>
