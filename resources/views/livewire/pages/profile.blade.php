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
              <a href="/logout">Logout</a>
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
              <a href="/address/create" wire:navigate
                class="text-decoration-none text-white dark-cream-bg border-0 py-2 px-4 rounded-2">+
                Tambah Alamat</a>
            </header>
            <hr class="border-2 border-dark">
            @foreach ($addresses as $address)
              <div
                class="d-flex align-items-center {{ $address->status == 'yes' ? 'light-cream-bg' : '' }} p-3 rounded-3 justify-content-between mb-3">
                <div>
                  <span class="fw-bold">{{ $address->name }}</span> | ({{ $address->phone_number }}) <br>
                  <span>{{ $address->address }}</span> <br>
                  <span>{{ $address->city }}, {{ $address->province }}, {{ $address->zip_code }}</span>
                </div>
                <div>
                  <a href="/address/edit/{{ $address->id }}" wire:navigate
                    class="text-decoration-none bg-transparent border-0 dark-cream-color">Ubah</a> |
                  <button type="button" wire:click.prevent='useAddress({{ $address->id }})'
                    class="bg-transparent border-0 dark-cream-color">Gunakan</button>
                </div>
              </div>
              <hr>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
