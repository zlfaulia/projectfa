<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@extends('FE.layout.index')
@extends('FE.layout.topbar')

@section('content')
<section class="bg0 p-t-50 p-b-60">
<div class="p-t-40 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
      <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
        <button class="how-pos3 hov3 trans-04 js-hide-modal1">
          <img src="{{ asset('FE/images/icons/icon-close.png')}}" alt="CLOSE" />
        </button>

        <div class="row">
          <div class="col-md-6 col-lg-7 p-b-30">
            <div class="p-l-25 p-r-30 p-lr-0-lg">
              <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>
                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                <div class="slick3 gallery-lb">
                  <div class="item-slick3" data-thumb="{{ asset('public/gambar_produk/'.$produk->gambar_produk) }}">
                    <div class="wrap-pic-w pos-relative" style="width:400px; heigth:500px;">
                      <img style="width:350px; heigth:500px;" src="{{ asset('public/gambar_produk/'.$produk->gambar_produk)}} " alt="IMG-PRODUCT" />

                      <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                        href="{{ asset('public/gambar_produk/'.$produk->gambar_produk)  }}">
                        <i class="fa fa-expand"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 p-b-30">
            <div class="p-r-50 p-t-5 p-lr-0-lg">
              <h3 class="mtext-112 cl2 js-name-detail p-b-10"> {{$produk->nama_produk}}</h3>

              <h5 class="mtext-105 cl2 js-name-detail p-b-10"> Mulai dari {{ $stok->harga_produk}}</h5>

                {{-- <span class="mtext-106 cl2"> harga</span> --}}

              {{-- <p class="stext-102 cl3 p-t-23"></p> --}}

              <p class="stext-102 cl3 p-t-15">{{$produk->deskripsi_produk }}</p>

              <div class="p-t-20">
                <div class="mtext-110 cl2 js-name-detail p-b-10">Pilih Pesanan</div>
                <select class="form-control select2" name="produk_id" id="produk_id">
                    <option disabled value>Pilih pesanan</option>
                        @foreach ($harga as $item)
                        <option value="{{ $item->id}}">{{$item->ukuran.'-'.$item->variasi.'-'.$item->harga_produk}}</option>
                        @endforeach
                    </select>
        </div>

        <div class="p-t-20">
         <div class="mtext-110 cl2 js-name-detail p-b-10">Pilih Warna</div>
         <select class="form-control select2" name="produk_id" id="produk_id">
             <option disabled value>Pilih warna</option>
                 @foreach ($warna as $item)
                 <option value="{{ $item->id}}">{{$item->warna}}</option>
                 @endforeach
             </select>
            </div>
        <div class="p-t-20">
            <div class="mtext-110 cl2 js-name-detail p-b-10">Jumlah Pesan</div>
          <form method="post" action="{{ url('detailProduk') }}/{{$produk->id}}">
            @csrf
            <input type="text" name="jumlah_pesan" class="form-control" required="">

            <button type="submit" class="text-left btn btn-block btn-sm mt-3" style="background-color: rgb(208, 208, 221); border-radius: 8px;">
                <span class="mtext-110 cl2 js-name-detail p-b-10">
                    Masukkan Keranjang
                </span>
            </button>
            <button type="submit" class="text-left btn btn-block btn-sm mt-3 mtext-110 cl2 js-name-detail p-b-10" style="background-color: rgb(208, 208, 221); border-radius: 8px">
                <span class="mtext-110 cl2 js-name-detail p-b-10">
                    Pesan Sekarang
                </span>
            </button>
            {{-- <button type="submit" class="btn btn-primary btn sm">Test </button> --}}
            {{-- <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 mt-3">Masukkan Keranjang</button> --}}
        </form>

        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
