<div id="cart-page">
  <div class="row">
    <div class="col d-flex justify-content-center">
      <header class="py-4">
        <h4 class="text-uppercase fw-semibold">Checkout</h4>
      </header>
    </div>
  </div>

  {{-- Address Info start --}}
  <div class="light-cream-bg py-4 mb-5">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-1 align-self-start">
          <iconify-icon icon="mdi:location" class="fs-5"></iconify-icon>
        </div>
        <div class="col-md-6 ">
          <h5 class="fw-semibold">Alamat Pengiriman</h5>
          <div>
            <p>{{ $address->name }} | {{ $address->phone_number }}</p>
            <hr>
            <div>{{ $address->address }}</div>
            <div>{{ $address->city }}, {{ $address->province }}, {{ $address->zip_code }}</div>
          </div>
        </div>
        <div class="col-md-5 d-flex justify-content-end">
          <a href="/my-profile" wire:navigate class="text-decoration-none d-inline-block black-color">
            <iconify-icon icon="material-symbols-light:keyboard-arrow-right" class="fs-50"></iconify-icon>
          </a>
        </div>
      </div>
    </div>
  </div>
  {{-- Address Info end --}}



  {{-- Product start --}}
  <div class="container mb-5">
    <div class="row">
      <div class="col-1"></div>
      <div class="col">
        @foreach ($products as $product)
          <div class="row my-2">
            <div class="col">
              <div class="d-flex justify-content-between align-items-center ">
                <div class="d-flex">
                  <div class="overflow-hidden rounded-4 border " style="width: 130px;">
                    <img src="{{ $product->product->image }}" alt="" width="100%">
                  </div>
                  <div class="ms-4">
                    <h4 class="fw-bold">{{ $product->product->title }}</h5>
                      <h5>Rp. {{ number_format($product->price, 0, ',', '.') }}</h5>
                      <h5>{{ $product->quantity }}x</h5>
                  </div>
                </div>
                <div>
                  <a href="#" wire:click.prevent='delete({{ $product->id }})'
                    class="text-decoration-none text-danger">
                    <iconify-icon icon="humbleicons:times" class="fs-30"></iconify-icon>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <hr>
        @endforeach
      </div>
    </div>

  </div>
  {{-- Product end --}}

  {{-- Delivery Option start --}}
  <div class="op-green-bg py-4 border border-black border-start-0 border-end-0">
    <div class="container">
      <div class="row">
        <div class="col-1"></div>
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h5 class="fw-bold">Opsi Pengiriman</h5>
                  <div class="fs-5">Reguler ( 2 - 3 Hari )</div>
                  <div class="fs-5">Estimasi tiba : 2 - 4 Mei</div>
                </div>
                <div>
                  <span class="fs-5">Rp. {{ number_format($totalDelivery, 0, ',', '.') }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Delivery Option end --}}

  {{-- Message start --}}
  <div class="container py-1 mt-3" id="msg-cart">
    <div class="row">
      <div class="col-1"></div>
      <div class="col d-flex justify-content-between">
        <label for="" class="fs-5">Pesan :</label>
        <input type="text" name="" id="" class="border-0 shadow-none"
          placeholder="Silahkan tinggalkan pesan...">
      </div>
    </div>
  </div>
  {{-- Message end --}}

  <hr>
  {{-- Payment Method start --}}
  <div class="container py-1 mt-3" id="msg-cart">
    <div class="row">
      <div class="col-1"></div>
      <div class="col">
        <div class="row">
          <div class="col d-flex justify-content-between">
            <h5>Total Pesanan (1 Produk) : </h5>
            <span class="fs-5 dark-cream-color fw-semibold">Rp. {{ number_format($totalPrice, 0, ',', '.') }}</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-1">
        <iconify-icon icon="solar:dollar-bold" class="fs-5"></iconify-icon>
      </div>
      <div class="col d-flex justify-content-between align-items-center">
        <h5 class="fw-bold">Metode Pembayaran</h5>
        <span>Transfer Bank - Bank BCA</span>
      </div>
    </div>
  </div>
  {{-- Payment Method end --}}

  <hr>
  {{-- Payment list start --}}
  <div class="container py-1 mt-3" id="msg-cart">
    <div class="row">
      <div class="col-1">
        <iconify-icon icon="solar:bill-list-bold" class="fs-5"></iconify-icon>
      </div>
      <div class="col">
        <h5 class="fw-bold">Rincian Pembayaaran</h5>

        <div class="d-flex justify-content-between ">
          <div class="fs-5">Subtotal Produk</div>
          <div class="fs-5">Rp {{ number_format($totalPrice, 0, ',', '.') }}</div>
        </div>
        <div class="d-flex justify-content-between ">
          <div class="fs-5">Subtotal Pengiriman</div>
          <div class="fs-5">Rp {{ number_format($totalDelivery, 0, ',', '.') }}</div>
        </div>
        <div class="d-flex justify-content-between ">
          <h5 class="fs-5 fw-bold">Total Pembayaran</h5>
          <div class="fs-5 dark-cream-color fw-semibold">Rp {{ number_format($total, 0, ',', '.') }}</div>
        </div>
      </div>
    </div>
  </div>
  {{-- Payment list end --}}
  <hr>

  <div class="container mb-5">
    <div class="row">
      <div class="col d-flex justify-content-end">
        <button id="pay-button" class="dark-cream-bg text-white border-0 fw-bold px-3 py-2 rounded-2"
          data-bs-toggle="modal" data-bs-target="#exampleModal">Buat
          Pesanan</button>
      </div>
    </div>
  </div>

  {{-- wire:click.prevent='delete_cart({{ Auth::user()->id }})' --}}

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body p-0 position-relative">
          <img src="/mov-assets/success.png" alt="" class="w-100">
          <div class="position-absolute" style="bottom: 30px; left: 25%;">
            <a href="https://wa.me/+6287863299291" target="_blank">
              <img src="/mov-assets/btn-wa.png" alt="" class="" style="width: 250px;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
