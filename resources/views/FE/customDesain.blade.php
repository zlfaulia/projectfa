@extends('FE.layout.index')
@extends('FE.layout.topbar')

@section('content')
    <section class="p-lr-15 p-tb-100">
        <form method="post" action="{{ url('/FE/customDesain/') }}" id="myForm" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-custom" id="name">
                <div id="kategori" class="form-text">contoh : kaos custom, PDH, baju olahraga, kaos polo dan lainnya</div>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Bahan</label>
                <input type="text" name="bahan" class="form-custom" id="name">
                <div id="kategori" class="form-text">contoh : cotton combed 30s, american drill dan lainnya</div>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Desain</label>
                <input class="p-tb-5" name="desain" type="file" id="avatar" name="avatar"
                    accept="image/png, image/jpeg" />
                <p>File berupa jpg,png,pdf atau yang disarankan berupa file (coreldraw/lainnya)</p>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Catatan Pesanan</label>
                <input type="text" name="cat_pesan" class="form-custom" id="name">
                <div id="kategori" class="form-text">contoh : ukuran M-lengan panjang(50), L-lengan pendek(40)</div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </section>
@endsection
