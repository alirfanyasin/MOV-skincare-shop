<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="Mov Skincare">
  <meta name="description" content="Penjualan skincare yang original">
  <meta name="keywords" content="online shop, skincare, health">
  <meta name="author" content="Irfan Yasin">
  <meta name="robots" content="index, follow">
  <!-- Metadata untuk SEO (opsional) -->
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">
  <meta name="robots" content="noarchive">
  <meta name="robots" content="nosnippet">
  <meta name="robots" content="noindex, nofollow">
  <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">



  <title>MOV - {{ $title ?? env('APP_NAME') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Favicon -->
  <link rel="icon" href="/mov-assets/logo/logo.png" type="image/x-icon">

  {{-- Vite --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{-- <link rel="stylesheet" href="/build/assets/app-DtG8GlKQ.css"> --}}
</head>

<body>

  @livewire('components.navbar')

  <main>



    <section class="auth-section vh-100">
      <div class="row">
        <div class="col-md-7 d-flex align-items-center cream-bg pt-5 vh-100">
          <div class="container ">
            <div class="row d-flex justify-content-end">
              <div class="col-md-11">
                <img src="/mov-assets/logo/logo-white.png" alt="second logo">
                <div class="mt-5 position-relative">
                  <h1 class="fw-bold green-color fs-70">Jadilah Versi <sup><img src="/mov-assets/shape/star-cream.png"
                        alt=""></sup> <br> Terbaik dari Diri <br> <span class="position-absolute"
                      style="bottom: -50px; left: -50px"><img src="/mov-assets/shape/star-cream.png" width="50px"
                        alt=""></span>
                    Kamu</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 vh-100 d-flex align-items-center">
          <div class="row d-flex justify-content-center align-items-center pt-5 w-100">
            <div class="col-md-9">
              {{ $slot }}

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  {{-- <script src="/build/assets/app-DkDdL2UM.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  {{-- Iconify --}}
  <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
</body>

</html>
