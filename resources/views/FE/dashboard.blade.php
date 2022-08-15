@extends('FE.layout.index')
@extends('FE.layout.slider')
@extends('FE.layout.topbar')

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
    </div>
  </div>
</div>

<section class="bg0 p-t-23 p-b-50">
  <div class="container">
    <div class="p-b-10">
      <h3 class="ltext-103 txt-center cl5">Galeri</h3>
    </div>
    <div class="row isotope-grid">
      @foreach($galeris as $galeri)
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('public/dokumentasi/'.$galeri->dokumentasi)  }}" style="width: 350px;" height="250px;" />
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> {{
                $galeri->keterangan }} </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<section class="bg0 p-t-23 p-b-50">
  <div class="container">
    <div class="p-b-10">
      <h3 class="ltext-103 txt-center cl5">Produk</h3>
    </div>
    <div class="row isotope-grid">
      @foreach($produks as $produk)
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{ asset('public/gambar_produk/'.$produk->gambar_produk)  }}" style="width: 250px;" height="300px;" />

        <a href="{{ url('detailProduk') }}/{{$produk->id}}"class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04  ">
              Detail Produk </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l">
              <a href="detailProduk.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> {{
                $produk->nama_produk }} </a>

              <span class="stext-105 cl3">{{ $produk->harga_produk }} </span>
            </div>

            {{-- <div class="block2-txt-child2 flex-r p-t-3">
              <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                <img class="icon-heart1 dis-block trans-04" src="{{ asset('FE/images/icons/icon-heart-01.png') }}"
                  alt="ICON" />
                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                  src="{{ asset('FE/images/icons/icon-heart-02.png') }}" alt="ICON" />
              </a>
            </div> --}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="p-b-20">
      <!-- <div class="col-md-12 col-lg-8"> -->
      <!-- <div class="p-t-10 p-r-115 p-r-15-lg p-r-0-md"> -->
      <h3 class="ltext-103 txt-center cl2 p-b-16">Tata Cara Pemesanan</h3>

      <p class="stext-113 cl6 p-b-15"> <b>TATA CARA PESANAN</b> <br/>
          1.	Konsumen harus mendaftar terlebih dahulu pada bagian register yang disediakan. <br/>
          2.	Memilih produk yang akan dipesan (min pembelian 12 pcs), jika pesan lebih dari 3 lusin (produk tertentu) maka akan mendapat potongan harga.<br/>
          3.	Jika sudah memilih, maka bisa langsung mengisi jumlah yang dipesan dan mengisi catatan pesanan yang disediakan.<br/>
          4.	Setelah itu bisa langsung klik pesan sekarang, maka akan muncul tampilan yang baru.<br/>
          5.	Kemudian konsumen bisa mengecek kembali detail pesanan yang sudah dipesan, juga alamat untuk pengiriman pesanan tersebut dan memilih opsi jika pesanan sudah selesai. <br/>
          6.	Jika konsumen memilih opsi “pakai kurir”, maka konsumen memilih kurir pengiriman yang sudah disediakan.<br/>
          7.	Konsumen bisa klik pesan, jika semua sudah benar. Kemudian melakukan pembayaran dengan memilih metode yang ada. <br/>
          8.	Setelah pembayaran selesai, konsumen melakukan upload bukti transfer pada form yang disediakan.<br/>
        <b>TATA CARA CUSTOM DESAIN</b> <br/>
          1.	Konsumen bisa langsung memilih fitur custom desain, kemudian mengisi beberapa informasi yang dibutuhkan.<br/>
          2.	Jika sudah bisa langsung klik kirim.<br/>
          3.	Konsumen bisa menunggu balasan pengelola konveksi melalui WhatsApp (diluar dari sistem), apa pesanan diterima atau tidak.<br/>

      </p>
    </div>
  </div>
</section>
@endsection
