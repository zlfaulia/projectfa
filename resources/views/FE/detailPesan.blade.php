{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<p>Detail Pesanan</p>


<div class="how-itemcart1">
    <img src="{{ asset('public/gambar_produk/' . $produk->gambar_produk) }}" style="width: 10%; margin-left:15px;" />
<p class="{{ $produk->nama_produk }}"></p>
</div>

<div>
    <td>{{ $produk->nama_produk }}</td>
</div> --}}




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@extends('FE.layout.index')
@extends('FE.layout.topbar')

@section('content')
<section class="bg0 p-t-50 p-b-60">
    <div class="p-t-40 p-b-20">
        <div class="overlay-modal1 js-hide-modal1"></div>

        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="{{ asset('FE/images/icons/icon-close.png') }}" alt="CLOSE" />
                </button>

                <div class="row">
                    <div class="col-12 p-b-30">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        <th>Konsumen</th>
                                        <th>Nama Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Total</th>
                                    </tr>

                                    <tr class="table_row">
                                        <td>Konsumen</td>
                                        <td>{{$produk->nama_produk}}</td>
                                        <td>{{$produk->deskripsi_produk}}</td>
                                        <td>$ 36.00</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <div
                                    class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                    Bayar
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
