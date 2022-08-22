<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="{{ asset('FE/images/icons/favicon.png') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/bootstrap/css/bootstrap.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset( 'FE/fonts/iconic/css/material-design-iconic-font.min.css')
    }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/fonts/linearicons-v1.0.0/icon-font.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/animate/animate.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/css-hamburgers/hamburgers.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/animsition/css/animsition.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/select2/select2.min.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/daterangepicker/daterangepicker.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/slick/slick.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/MagnificPopup/magnific-popup.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/css/util.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('FE/css/main.css') }}" />
  <!--===============================================================================================-->
</head>

<section class="section-slide">
    <div class="wrap-slick1">
      <div class="slick1">
        <div class="item-slick1" style="background-image: url(FE/images/slide1.png)">
          <div class="container h-full">
            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                <span class="ltext-101 cl2 respon2"> Selamat Datang </span>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">Nelba Konveksi</h2>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                <a href="{{ route('produk') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Shop
                  Now </a>
              </div>
            </div>
          </div>
        </div>

        {{-- <div class="item-slick1" style="background-image: url(FE/images/slide1.png)">
          <div class="container h-full">
            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                <span class="ltext-101 cl2 respon2"> Menerima Pesanan Grosir </span>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                <h5 class="ltext-201 cl2 p-t-19 p-b-43 respon1">Mulai dari kaos sampai pakaian formal lainnya</h5>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Shop
                  Now </a>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
