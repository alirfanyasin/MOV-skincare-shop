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
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


  {{-- Vite --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- <link rel="stylesheet" href="/build/assets/app-CBZfqUgJ.css"> --}}
</head>

<body>

  @livewire('components.navbar')

  <main>
    {{ $slot }}
  </main>

  @livewire('components.footer')



  {{-- <script src="/build/assets/app-DkDdL2UM.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  {{-- Iconify --}}
  <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


  <script>
    $(document).ready(function() {



      $('.autoplay-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
      });
    });
  </script>



</body>

</html>
