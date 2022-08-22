<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<p>Detail Pesanan</p>


<div class="how-itemcart1">
    <img src="{{ asset('public/gambar_produk/' . $produk->gambar_produk) }}" style="width: 10%; margin-left:15px;" />
    <p class="{{ $produk->nama_produk }}"></p>
</div>

<div>
    <td>{{ $produk->nama_produk }}</td>
</div>



{{-- <td>{{ $beli->variasi . '-' . $beli->ukuran }}</td> --}}
{{-- <td>{{ $beli->ukuran }}</td>
<td>{{ $beli->harga_produk }}</td>
<td>{{ $jumlah }}</td>
<td>Rp.{{ preg_replace('/\D/', '', $produk->harga_produk) * (int) $jumlah }}</td> --}}
