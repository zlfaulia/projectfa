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
                    <div class="wrap-pic-w pos-relative">
                      <img src="{{ asset('public/gambar_produk/'.$produk->gambar_produk)  }}" alt="IMG-PRODUCT" />

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
              <h4 class="mtext-105 cl2 js-name-detail p-b-14"> {{$produk->nama_produk}}</h4>

                <span class="mtext-106 cl2"> harga </span>

              <p class="stext-102 cl3 p-t-23">{{$produk->deskripsi_produk }}</p>

              <div class="p-t-33">
                <div class="flex-w flex-r-m p-b-10">
                  <div class="size-203 flex-c-m respon6">Ukuran</div>
                  <div class="size-204 respon6-next">
                    <div class="rs1-select2 bor8 bg0">
                         {{-- <label>Ukuran</label> --}}
                    <select name="stok_id" class="form-control " >
                        <option value="">-Pilih Ukuran-</option>
                        @foreach ($stok as $item)
                        <option value="{{ $item->id}}">{{$item->ukuran.'-'.$item->variasi.'-'.$item->harga_produk}}</option>
                        @endforeach
                    </select>
                      {{-- <div class="dropDownSelect2"></div> --}}
                    </div>
                  </div>
                </div>


                <div class="flex-w flex-r-m p-b-10">
                  <div class="size-204 flex-w flex-m respon6-next">
                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                      <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-minus"></i>
                      </div>

                      <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" />

                      <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-plus"></i>
                      </div>
                    </div>

                    <a href="{{ url('keranjang') }}"><button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">Masukkan Keranjang</button></a>
                    <a href="{{ url('keranjang') }}"><button>Pesan</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
