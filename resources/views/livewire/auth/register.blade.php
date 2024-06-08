<form wire:submit.prevent='register'>
  <div class="mb-4">
    <label for="" class="fw-semibold green-color mb-2">Nama Lengkap</label>
    <input type="text" name="name" id="" wire:model='name' class="form-control"
      placeholder="Tulis Nama Lengkap">
    @error('name')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="mb-4">
    <label for="" class="fw-semibold green-color mb-2">Email</label>
    <input type="email" name="email" id="" wire:model='email' class="form-control"
      placeholder="email@example.com">
    @error('email')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="mb-4">
    <label for="" class="fw-semibold green-color mb-2">No telepon</label>
    <input type="text" name="no_phone" id="" wire:model='phone_number' class="form-control"
      placeholder="+62****">
    @error('phone_number')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="mb-4">
    <label for="" class="fw-semibold green-color mb-2">Kata Sandi</label>
    <input type="password" name="password" id="" wire:model='password' class="form-control"
      placeholder="Tulis Kata Sandi">
    @error('password')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="mt-5">
    <div class="d-flex justify-content-between">
      <span class="green-color fw-bold">Sudah Memiliki Akun?</span>
      <a href="/login" wire:navigate class="text-decoration-none fw-bold dark-cream-color">Sign in</a>
    </div>
  </div>
  <hr class="divider">
  <div class="mb-4">
    <div class="d-flex align-items-center">
      <div>
        <input type="checkbox" class="me-3">
      </div>
      <div>
        <small class="fw-semibold">Dengan mendaftar akun, saya setuju dengan
          <span class="dark-cream-color"> MOV Lisensi Pengguna Akhir </span> dan <span class="dark-cream-color">
            Privasi & Persyaratan </span> </small>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center ">
    <button type="submit"
      class="green-bg border-0 text-white fw-bold text-uppercase px-5 py-2 rounded-pill">Daftar</button>
  </div>
</form>
