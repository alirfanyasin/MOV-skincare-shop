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
            <header class="mb-5">
              <h4 class="text-uppercase fw-bold">Edit Alamat</h4>
            </header>

            <form wire:submit.prevent='updateAddress'>
              <div class="mb-3">
                <label for="name" class="fw-semibold">Nama Lengkap</label>
                <input type="text" wire:model='name' id="name" name="name" value="{{ $data->name }}"
                  class="form-control">
                @error('name')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="nomor_hp"class="fw-semibold">Nomor Telepon</label>
                <input type="number" wire:model='phone_number' id="nomor_hp" name="nomor_hp"
                  value="{{ $data->phone_number }}" class="form-control">
                @error('phone_number')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="city" class="fw-semibold">Kota</label>
                <input type="text" wire:model='city' id="city" name="city" class="form-control"
                  placeholder="Ex: KOTA SURABAYA" value="{{ $data->city }}">
                @error('city')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="province" class="fw-semibold">Provinsi</label>
                <input type="text" wire:model='province' id="province" name="province" class="form-control"
                  placeholder="Ex: JAWA TIMUR" value="{{ $data->province }}">
                @error('province')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="zip_code"class="fw-semibold">Kode POS</label>
                <input type="text" wire:model='zip_code' id="zip_code" name="zip_code" class="form-control"
                  placeholder="Ex: 123456" value="{{ $data->zip_code }}">
                @error('zip_code')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="address" class="fw-semibold">Detail Alamat</label>
                <textarea name="address" wire:model='address' id="address" cols="30" class="form-control" rows="4"
                  placeholder="Jl. Anonym Blok Z Nomor 20, (Depan Setya Laundry)">{{ $data->address }}</textarea>
                @error('address')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div>
                <button type="submit" class="btn dark-cream-bg text-white">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    button.dark-cream-bg:hover {
      background: #EE7214;
    }
  </style>
</div>
