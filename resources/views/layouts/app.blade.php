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

  {{-- JQuery --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Favicon -->
  <link rel="icon" href="/mov-assets/logo/logo.png" type="image/x-icon">

  {{-- Vite --}}
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

  <link rel="stylesheet" href="/build/assets/app-DcDHF_vU.css">
</head>

<body>

  @livewire('components.navbar')

  <main>
    {{ $slot }}
  </main>

  @livewire('components.footer')

  <script src="/build/assets/app-DkDdL2UM.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  {{-- Iconify --}}
  <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
</body>

</html>
