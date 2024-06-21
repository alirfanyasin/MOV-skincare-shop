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
            class="text-decoration-none mb-3 dark-cream-color bg-light p-3 d-flex align-items-center fw-bold rounded-2">
            <iconify-icon icon="bxs:user" class="fs-4 me-2"></iconify-icon>
            <span>Akun Saya</span>
          </a>
          <a href="/my-order"
            class="text-decoration-none text-dark bg-light p-3 d-flex align-items-center fw-bold rounded-2">
            <iconify-icon icon="ion:receipt-sharp" class="fs-4 me-2"></iconify-icon>
            <span>Pesanan Saya</span>
          </a>

        </div>

      </div>
      <div class="col-md-9">
        <div>
          <div class="bg-light p-4 rounded-4">
            <header>
              <h4 class="text-uppercase fw-bold">Profile Saya</h4>
              <p class="text-secondary">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun
              </p>
            </header>
            <hr class="border-2 border-dark">
            <div class="row">
              <div class="col-md-8 border-end border-2 border-secondary">
                <form action="">
                  <table class="fs-5">
                    <tr style="height: 60px;">
                      <td class="">Name</td>
                      <td style="width: 100px;"></td>
                      <td>
                        <input type="text" name="name" id="name" class="border-0 bg-light"
                          value="{{ auth()->user()->name }}">
                      </td>
                    </tr>
                    <tr style="height: 60px;">
                      <td class="">Email</td>
                      <td style="width: 100px;"></td>
                      <td>
                        <input type="email" name="email" id="email" class="border-0 bg-light"
                          value="{{ auth()->user()->email }}">
                      </td>
                    </tr>
                    <tr style="height: 60px;">
                      <td class="">Nomor Telepon</td>
                      <td style="width: 100px;"></td>
                      <td>
                        <input type="number" name="phone_number" id="phone_number" class="border-0 bg-light"
                          value="{{ auth()->user()->phone_number }}">
                      </td>
                    </tr>
                    <tr style="height: 60px;">
                      <td class="">Jenis Kelamin</td>
                      <td style="width: 100px;"></td>
                      <td>
                        <select name="gender" id="gender" class="border-0 bg-light">
                          <option value="Pria">Pria</option>
                          <option value="Wanita">Wanita</option>
                        </select>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
              <div class="col-md-4 text-center">
                <img src="/mov-assets/avatar.png" alt="" class="mb-4"> <br>
                <a href="" class="text-decoration-none text-dark">Pilih Gambar</a>
              </div>
            </div>

            <hr class="border-2 border-dark">

            <header class="d-flex align-items-center justify-content-between">
              <h4 class="text-uppercase fw-bold">Alamat Saya</h4>
              <button class="text-white dark-cream-bg border-0 py-2 px-4 rounded-2" data-bs-toggle="modal"
                data-bs-target="#addAddress">+ Tambah Alamat</button>
            </header>
            <hr class="border-2 border-dark">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <span class="fw-bold">{{ auth()->user()->name }}</span> | ({{ auth()->user()->phone_number }}) <br>
                <span>Citraland VI no 22 (Depan Setya Laundry)</span> <br>
                <span>KOTA SURABAYA, JAWA TIMUR, 60241</span>
              </div>
              <button class="bg-transparent border-0 dark-cream-color">Ubah</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="addAddress" tabindex="-1" aria-labelledby="addAddressLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Alamat</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="fw-semibold">Nama Lengkap</label>
            <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"
              class="form-control">
          </div>
          <div class="mb-3">
            <label for="nomor_hp" class="fw-semibold">Nomor Telepon</label>
            <input type="number" id="nomor_hp" name="nomor_hp" value="{{ Auth::user()->phone_number }}"
              class="form-control">
          </div>
          <div class="mb-3">
            <label for="city" class="fw-semibold">Kota</label>
            <input type="text" id="city" name="city" class="form-control"
              placeholder="Ex: KOTA SURABAYA">
          </div>
          <div class="mb-3">
            <label for="province" class="fw-semibold">Provinsi</label>
            <input type="text" id="province" name="province" class="form-control" placeholder="Ex: JAWA TIMUR">
          </div>
          <div class="mb-3">
            <label for="zip_code" class="fw-semibold">Kode POS</label>
            <input type="text" id="zip_code" name="zip_code" class="form-control" placeholder="Ex: 123456">
          </div>
          <div class="mb-3">
            <label for="address" class="fw-semibold">Detail Alamat</label>
            <textarea name="address" id="address" cols="30" class="form-control" rows="4"
              placeholder="Jl. Anonym Blok Z Nomor 20, (Depan Setya Laundry)"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn dark-cream-bg text-white">Tambah</button>
        </div>
      </div>
    </div>
  </div>
</div>
