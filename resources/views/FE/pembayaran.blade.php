@extends('FE.layout.index')
@extends('FE.layout.topbar')

@section('content')
<!-- Content page -->
<section class="p-lr-15 p-tb-100">
    <form method="post" action="{{ url('/FE/pembayaran/') }}" id="myForm" enctype="multipart/form-data" >
    @csrf
    {{-- <h3>pembayaran</h3>
    <div class="form-group">
        <label>Pilih Bahan:</label>

      </div> --}}
    <div class="mb-3">
      <label for="kategori" class="form-pemb">Pilih Metode Pembayaran</label>
      <select class="form-select" >
        <option selected>-</option>
        <option value="1">Bayar DP</option>
        <option value="2">Cash</option>
      </select>
      {{-- <select class="form-control1" id="pilihan">
        <option>-</option>
        <option>Cash</option>
        <option>Bayar DP</option>
      </select> --}}
      {{-- <input type="text" name="kategori" class="form-control" id="name">
      <div id="kategori" class="form-text">contoh : kaos custom, PDH, baju olahraga, kaos polo dan lainnya</div> --}}
    </div>

    <div class="mb-3">
        <label for="kategori" class="form-pemb">Silahkan Melakukan Pembayaran di Rekening Berikut :</label>
        <img src="{{ asset('FE/images/rek.png')}}" style="width: 600px; height: 200px" >
        {{-- <div class="form-pem">Silahkan Melakukan Pembayaran di Rekening Berikut :
        </div>
        <div class="gambar">
            <img src="{{ asset('FE/images/rek.png')}}">
        </div> --}}
        {{-- <label for="kategori" class="form-pemb"></label>

       style="width: 150px;" height="100px;" /> --}}
            {{-- <img src="public/FE/images/rek.png" alt="rekening" > --}}

    </div>

    <div class="mb-3">
        <label for="kategori" class="form-pemb">Upload Bukti Pembayaran</label>
        <input class="p-tb-5" name="desain" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />
        <p>File berupa jpg dan png</p>
    </div>

    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>



</section>
@endsection
