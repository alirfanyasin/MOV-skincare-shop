<div class="light-cream-bg">
  <div class="container pt-5" style="margin-top: 70px;">
    <div class="row">
      <div class="col-md-3">
        <div class="d-flex align-items-center py-3">
          <img src="/mov-assets/avatar.png" alt="" style="width: 60px; height: 60px;">
          <div class="ms-3">
            <div class="fw-bold fs-5">{{ auth()->user()->name }}</div>
            <small class="" style="margin-top: -10px;">
              <a href="" class="text-decoration-none text-dark">Ubah Profile</a>
            </small>
          </div>
        </div>
        <hr class="border-3">

        <div>
          <a href="/my-profile"
            class="text-decoration-none mb-3 text-dark bg-light p-3 d-flex align-items-center fw-bold rounded-2">
            <iconify-icon icon="bxs:user" class="fs-4 me-2"></iconify-icon>
            <span>Akun Saya</span>
          </a>
          <a href="/my-order"
            class="text-decoration-none dark-cream-color bg-light p-3 d-flex align-items-center fw-bold rounded-2">
            <iconify-icon icon="ion:receipt-sharp" class="fs-4 me-2"></iconify-icon>
            <span>Pesanan Saya</span>
          </a>
        </div>

      </div>
      <div class="col-md-9">
        <div class="bg-light p-4 rounded-4">
          <div class="d-none">
            <div class="d-flex justify-content-between align-items-end">
              <div class="d-flex align-items-center">
                <img src="/mov-assets/product/product-4.png" alt="" style="width: 150px;">
                <div>
                  <h5 class="fw-semibold">Serum</h5>
                  <h5 class="fw-semibold">1x</h5>
                </div>
              </div>
              <span class="fs-4">Rp. 120.000</span>
            </div>
            <hr class="border-2 border-dark">
            <div class="d-flex justify-content-between align-items-end">
              <div class="d-flex align-items-center">
                <img src="/mov-assets/product/product-4.png" alt="" style="width: 150px;">
                <div>
                  <h5 class="fw-semibold">Serum</h5>
                  <h5 class="fw-semibold">1x</h5>
                </div>
              </div>
              <span class="fs-4">Rp. 120.000</span>
            </div>
            <hr class="border-2 border-dark">

            <div class="text-end">
              <h4 class="fw-bold">Total Pesanan : Rp. 120.000</h4>
              <p class="dark-cream-color fs-5">Status sedang dalam pengiriman</p>
            </div>
          </div>

          <div>
            <div class="row">
              <div class="col-md-8">
                <h1 class="fw-bold fs-55">Kamu belum <br> melakukan <br> pembelian saat ini.</h1>
              </div>
              <div class="col-md-4">
                <img src="/mov-assets/illustration-dog.png" alt="" class="w-100">
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
