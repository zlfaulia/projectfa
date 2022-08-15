@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Pesanan</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-secondary" href="{{ url('/admin/pesanan/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan Pesanan Baru</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Nama Konsumen</th>
            <th>Alamat Pengiriman</th>
            <th>Nama Produk</th>
            <th>Ukuran</th>
            <th>Variasi</th>
            <th>Jumlah</th>
            <th>Total Bayar</th>
            <th>Tanggal Pesan</th>
            <th>Catatan Pesanan</th>
            <th>Opsi Pengiriman</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pesanans as $pesanan)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{$pesanan->user->nama}}</td>
            <td>{{$pesanan->user->alamat}}</td>
            <td>{{$pesanan->produk->nama_produk}}</td>
            <td>{{$pesanan->stok->ukuran.'-'.$pesanan->stok->variasi}}</td>
            <td>{{$pesanan->jumlah}}</td>
            <td>{{$pesanan->total_bayar}}</td>
            <td>{{$pesanan->tanggal_pesan}}</td>
            <td>{{$pesanan->catatan_pesanan}}</td>
            <td>{{$pesanan->opsi_pengiriman}}</td>

            <td class="text-center">
            <form action="{{ url('/admin/pesanan/'.$pesanan->id) }}" method="POST">
              @method('DELETE')
              @csrf

                <a class="btn btn-primary btn-xs" href="{{ route('pesanan.show',$pesanan->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-secondary btn-xs" href="{{ url('/admin/pesanan/'.$pesanan->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>

                <button type="submit" class="btn btn-warning btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
