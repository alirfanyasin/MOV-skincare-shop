<aside class="vh-100">
  <div class="accordion mx-4" id="accordion-sidebar">
    <div class="accordion-item border-0">
      <h2 class="accordion-header">
        <a href="/promo" wire:navigate
          class="text-decoration-none accordion-button no-collapsed collapsed text-capitalize cream-color fs-4 fw-bold {{ Request::is('promo') ? 'light-cream-bg' : 'bg-transparent' }} border-0">
          Promo
        </a>
      </h2>
      {{-- <a href="" class="text-decoration-none d-block text-capitalize cream-color fs-4 fw-bold">Promo</a> --}}
    </div>
    <div class="accordion-item border-0">
      <h2 class="accordion-header" id="headingOne">
        <button
          class="accordion-button collapsed text-capitalize cream-color fs-4 fw-bold {{ !Request::is('promo') ? 'light-cream-bg' : '' }} border-0 collapsed"
          type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
          aria-expanded="{{ !Request::is('promo') ? 'true' : 'false' }}" aria-controls="collapseOne">
          Tipe Produk
        </button>
      </h2>
      {{-- show (class untuk menampilkan accordion) --}}
      <div id="collapseOne" class="accordion-collapse collapse {{ !Request::is('promo') ? 'show' : '' }}"
        aria-labelledby="headingOne" data-bs-parent="#accordion-sidebar">
        <div class="accordion-body">
          <div class="px-4">
            <a href="" class="text-decoration-none d-block py-1 fw-semibold fs-5">Serum</a>
            <a href="" class="text-decoration-none d-block py-1 fw-semibold fs-5">Moisturizer</a>
            <a href="" class="text-decoration-none d-block py-1 fw-semibold fs-5">Sunscreen</a>
            <a href="" class="text-decoration-none d-block py-1 fw-semibold fs-5">Toner</a>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion-item border-0">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed text-capitalize cream-color fs-4 fw-bold border-0" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Tipe Kulit
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordion-sidebar">
        <div class="accordion-body">
          <div class="px-4">
            <a href="#" wire:click.prevent='active_menu("normal")'
              class="text-decoration-none d-block py-1  fw-semibold fs-5 {{ $menu == 'normal' ? 'side_active' : '' }}">Normal</a>
            <a href="#" wire:click.prevent='active_menu("kering")'
              class="text-decoration-none d-block py-1 fw-semibold fs-5 {{ $menu == 'kering' ? 'side_active' : '' }}">Kering</a>
            <a href="#" wire:click.prevent='active_menu("berminyak")'
              class="text-decoration-none d-block py-1 fw-semibold fs-5 {{ $menu == 'berminyak' ? 'side_active' : '' }}">Berminyak</a>
            <a href="#" wire:click.prevent='active_menu("berjerawat")'
              class="text-decoration-none d-block py-1 fw-semibold fs-5 {{ $menu == 'berjerawat' ? 'side_active' : '' }}">Berjerawat</a>
            <a href="#" wire:click.prevent='active_menu("sensitif")'
              class="text-decoration-none d-block py-1 fw-semibold fs-5 {{ $menu == 'sensitif' ? 'side_active' : '' }}">Sensitif</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <style>
    .side_active {
      color: #F7B787;
      margin-left: 8px;
    }

    .accordion-body div a.text-decoration-none:hover {
      color: #F7B787;
      margin-left: 8px;
    }

    a {
      color: black;
    }

    .accordion-button:not(.collapsed) {
      color: #F7B787;
      background-color: #F9E8D9;
      box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    }
  </style>

  <script>
    document.addEventListener('livewire:navigated', () => {
      const buttons = document.querySelectorAll('.accordion-button');

      buttons.forEach(button => {
        button.addEventListener('click', function() {
          // Hapus kelas dari semua tombol
          buttons.forEach(btn => btn.classList.remove('light-cream-bg'));

          // Tambahkan kelas ke tombol yang aktif
          this.classList.add('light-cream-bg', 'cream-color');
        });
      });

      // Inisialisasi state awal
      document.querySelector('.accordion-button[aria-expanded="true"]').classList.add('light-cream-bg',
        'cream-color');
    });
  </script>


</aside>
