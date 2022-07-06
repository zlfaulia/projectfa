@extends('FE.layout.index')

@section('content')
<div class="sec-banner bg0 p-t-30 p-b-10">
  <div class="container">
    <div class="p-b-20">
      <!-- <div class="col-md-12 col-lg-8"> -->
      <!-- <div class="p-t-10 p-r-115 p-r-15-lg p-r-0-md"> -->
      <h3 class="ltext-103 txt-center cl2 p-b-16">Sekilas Informasi</h3>

      <p class="stext-113 cl6 p-b-15">
        Nelba konveksi merupakan usaha yang bergerak dibidang pembuatan dan pemesanan berbagai jenis pakaian, seperti
        kaos polos, pakaian dinas harian, jaket, kemeja batik dan yang lainnya sesuai dengan permintaan dari konsumen.
        Nelba
        konveksi ini lokasinya berada di daerah Dusun patoman, Kecamatan Blimbingsari, Kabupaten Banyuwangi yang sudah
        berdiri sejak tahun 2013 hingga sekarang.
      </p>

      <!-- <p class="stext-113 cl6 p-b-26">
                Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat
                volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur,
                quam velit convallis ipsum, et maximus enim ligula ac ligula.
              </p> -->
      <!-- </div> -->
      <!-- </div> -->

      <!-- <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
            <div class="how-bor1">
              <div class="hov-img0">
                <img src="{{ asset('') }}images/about-01.jpg" alt="IMG" />
              </div>
            </div>
          </div> -->
    </div>
    <!-- <div class="row">
          <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto"> -->
    <!-- Block1 -->
    <!-- <div class="block1 wrap-pic-w">
              <img src="{{ asset('') }}images/banner-01.jpg" alt="IMG-BANNER" />

              <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                <div class="block1-txt-child1 flex-col-l">
                  <span class="block1-name ltext-102 trans-04 p-b-8"> Women </span>

                  <span class="block1-info stext-102 trans-04"> Spring 2018 </span>
                </div>

                <div class="block1-txt-child2 p-b-4 trans-05">
                  <div class="block1-link stext-101 cl0 trans-09">Shop Now</div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
            <div class="block1 wrap-pic-w">
              <img src="{{ asset('') }}images/banner-02.jpg" alt="IMG-BANNER" />

              <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                <div class="block1-txt-child1 flex-col-l">
                  <span class="block1-name ltext-102 trans-04 p-b-8"> Men </span>

                  <span class="block1-info stext-102 trans-04"> Spring 2018 </span>
                </div>

                <div class="block1-txt-child2 p-b-4 trans-05">
                  <div class="block1-link stext-101 cl0 trans-09">Shop Now</div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
            <div class="block1 wrap-pic-w">
              <img src="{{ asset('') }}images/banner-03.jpg" alt="IMG-BANNER" />

              <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                <div class="block1-txt-child1 flex-col-l">
                  <span class="block1-name ltext-102 trans-04 p-b-8"> Accessories </span>

                  <span class="block1-info stext-102 trans-04"> New Trend </span>
                </div>

                <div class="block1-txt-child2 p-b-4 trans-05">
                  <div class="block1-link stext-101 cl0 trans-09">Shop Now</div>
                </div>
              </a>
            </div>
          </div>
        </div> -->
  </div>
</div>

<!-- Product -->
<section class="bg0 p-t-23 p-b-60">
  <div class="container">
    <div class="p-b-20">
      <h3 class="ltext-103 txt-center cl2">Galeri</h3>
    </div>
    <div class="row isotope-grid">
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('') }}images/galeri1.jpg" alt="IMG-PRODUCT" />
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> Esprit Ruffle Shirt </a>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                <img class="icon-heart1 dis-block trans-04" src="{{ asset('') }}images/icons/icon-heart-01.png"
                  alt="ICON" />
                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('') }}images/icons/icon-heart-02.png"
                  alt="ICON" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('') }}images/galeri2.jpg" alt="IMG-PRODUCT" />
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> Herschel supply </a>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                <img class="icon-heart1 dis-block trans-04" src="{{ asset('') }}images/icons/icon-heart-01.png"
                  alt="ICON" />
                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('') }}images/icons/icon-heart-02.png"
                  alt="ICON" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('') }}images/galeri3.jpg" alt="IMG-PRODUCT" />
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> Only Check Trouser </a>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                <img class="icon-heart1 dis-block trans-04" src="{{ asset('') }}images/icons/icon-heart-01.png"
                  alt="ICON" />
                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('') }}images/icons/icon-heart-02.png"
                  alt="ICON" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('') }}images/galeri4.jpg" alt="IMG-PRODUCT" />
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> Classic Trench Coat </a>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                <img class="icon-heart1 dis-block trans-04" src="{{ asset('') }}images/icons/icon-heart-01.png"
                  alt="ICON" />
                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('') }}images/icons/icon-heart-02.png"
                  alt="ICON" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Load more -->
    <div class="flex-c-m flex-w w-full p-t-20">
      <a href="galeri.html" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"> Load More </a>
    </div>
  </div>
</section>

<section class="bg0 p-t-23 p-b-100">
  <div class="container">
    <div class="p-b-10">
      <h3 class="ltext-103 txt-center cl5">Hasil Produk Pesanan</h3>
    </div>
    <div class="row isotope-grid">
      @foreach($produks as $produk)
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('FE/images/'.$produk->gambar_produk)  }}" alt="IMG-PRODUCT" />

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Detail Produk </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> {{
                $produk->nama_produk }} </a>

              <span class="stext-105 cl3">{{ $produk->harga_produk }} </span>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                <img class="icon-heart1 dis-block trans-04" src="{{ asset('FE/images/icons/icon-heart-01.png') }}"
                  alt="ICON" />
                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                  src="{{ asset('FE/images/icons/icon-heart-02.png') }}" alt="ICON" />
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      {{-- <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('') }}images/pdh.png" alt="IMG-PRODUCT" />

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Detail Produk </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> PDH (Pakaian
                Dinas Harian) </a>

              <span class="stext-105 cl3"> Rp. 120000-150000 </span>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                <img class="icon-heart1 dis-block trans-04" src="{{ asset('') }}images/icons/icon-heart-01.png"
                  alt="ICON" />
                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('') }}images/icons/icon-heart-02.png"
                  alt="ICON" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('') }}images/kemejabatik.png" alt="IMG-PRODUCT" />

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Detail Produk </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> Kemeja Batik </a>

              <span class="stext-105 cl3"> Rp. 100000 </span>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                <img class="icon-heart1 dis-block trans-04" src="{{ asset('') }}images/icons/icon-heart-01.png"
                  alt="ICON" />
                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('') }}images/icons/icon-heart-02.png"
                  alt="ICON" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('') }}images/kaosolahraga.png" alt="IMG-PRODUCT" />

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Detail Produk </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> Kaos Olahraga
              </a>

              <span class="stext-105 cl3"> Rp. 100000-130000 </span>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                <img class="icon-heart1 dis-block trans-04" src="{{ asset('') }}images/icons/icon-heart-01.png"
                  alt="ICON" />
                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('') }}images/icons/icon-heart-02.png"
                  alt="ICON" />
              </a>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</section>
@endsection