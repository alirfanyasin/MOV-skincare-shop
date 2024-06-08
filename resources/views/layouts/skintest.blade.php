<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="EduTech">
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
  {{-- Stroke --}}
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

  {{-- Vite --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{-- <link rel="stylesheet" href="app-CfJENQSC.css">
  <script src="app-DkDdL2UM.js"></script> --}}
</head>

<body>
  <div style="" class="{{ Request::is('skintest/result') ? 'white-bg' : 'light-cream-bg' }} vh-100">

    <div class="white-bg {{ Request::is('skintest/result') ? 'white-bg' : '' }}">
      <nav class="navbar py-3">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center w-100">
            <a href="/" wire:navigate class="text-decoration-none d-block text-dark fs-1"><iconify-icon
                icon="solar:arrow-left-outline"></iconify-icon></a>
            <img src="/mov-assets/logo/logo.png" alt="" width="100px" height="40px">
            <div></div>
          </div>
        </div>
      </nav>

      <div class="container padding-bottom-3x mb-1 mt-5">
        <div class="card mb-3 border-0">
          <div class="card-body">
            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
              <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon">1</div>
                </div>
                <h4 class="step-title">Tentang Diri</h4>
              </div>
              <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon">2</div>
                </div>
                <h4 class="step-title">Kulit</h4>
              </div>
              <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon">3</div>
                </div>
                <h4 class="step-title">Gaya Hidup</h4>
              </div>
              <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon">4</div>
                </div>
                <h4 class="step-title">Hasil Skin Test</h4>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <main>
      {{ $slot }}
    </main>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  {{-- Iconify --}}
  <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
</body>

</html>
