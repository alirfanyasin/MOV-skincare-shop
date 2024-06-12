<form wire:submit.prevent='login' class="w-100">
  @if (session()->has('failed'))
    <div class="mb-4">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('failed') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    </div>
  @endif
  <div class="mb-4">
    <label for="" class="fw-semibold green-color mb-2">Email</label>
    <input type="email" name="email" id="" wire:model='email' class="form-control"
      placeholder="email@example.com">
    @error('email')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>

  <div class="mb-2">
    <label for="" class="fw-semibold green-color mb-2">Kata Sandi</label>
    <input type="password" name="password" id="" wire:model='password' class="form-control"
      placeholder="Tulis Kata Sandi">
    @error('password')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="mb-4">
    <div class="d-flex justify-content-end">
      <a href="" class="text-decoration-none dark-cream-color">Lupa Kata Sandi?</a>
    </div>
  </div>

  <div class="d-flex justify-content-center ">
    <button type="submit"
      class="green-bg border-0 text-white fw-bold text-uppercase px-5 py-2 rounded-pill">Masuk</button>
  </div>
  <div class="text-center mt-4">
    Apakah kamu belum memiliki akun? <a href="/register" wire:navigate
      class="text-decoration-none fw-bold dark-cream-color">Daftar</a>
  </div>

</form>
