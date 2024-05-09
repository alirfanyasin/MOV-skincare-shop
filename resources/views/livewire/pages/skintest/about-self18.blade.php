<div>
  {{-- Finish --}}
  <div class="container" id="finish">
    <div class="d-flex justify-content-center">
      <div class="text-center">
        <img src="/mov-assets/img-result.png" alt="Hasil" class="mb-5">
        <h3 class="fw-bold">Selesai</h3>
        <p>Sebentar ya, kami sedang menganalisa dan mencari produk <br> yang cocok untuk kamu</p>
        <div class="spinner-border dark-cream-color mx-auto" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
  </div>

  {{-- Result --}}
  <div class="container mt-5" id="result">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-3">
        <img src="/mov-assets/img-result-2.png" alt="Hasil" class="mb-5" width="100%">
      </div>
      <div class="col-md-5">
        <h3 class="fw-bold">Tipe Kulit Kamu,<span class="dark-cream-color">BERMINYAK</span></h3>
        <p class="mt-3">Kulit terlihat berkilau dan berminyak saat disentuh dan sering tumbuh jerawat</p>

        <div class="d-flex justify-content-start">
          <a href="/product" wire:navigate
            class="text-decoration-none dark-cream-color white-bg shadow py-2 px-5 d-inline-block mt-3 rounded-pill fw-semibold">Rekomendasi
            Produk &rightarrow;</a>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  const finish = document.querySelector('#finish')
  const result = document.querySelector('#result')
  const h3 = document.querySelector('h3')
  const spinner = document.querySelector('.spinner-border')

  spinner.style.display = 'none'
  result.style.display = 'none'

  setTimeout(() => {
    h3.innerHTML = 'Sedang Menganalisa...'
    spinner.style.display = 'block'
  }, 2000);

  setTimeout(() => {
    finish.style.display = 'none'
    result.style.display = 'block'
  }, 8000);
</script>
