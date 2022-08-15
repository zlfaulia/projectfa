@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Stok</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-secondary" href="{{ url('/admin/stok/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan Stok Baru</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Harga Produk</th>
            <th>Ukuran</th>
            <th>Variasi</th>
            <th>Warna</th>
            <th>Stok</th>
            <th>Tanggal Input</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($stoks as $stok)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $stok->produk->kode_produk}}</td>
            <td>{{ $stok->harga_produk}}</td>
            <td>{{ $stok->ukuran }}</td>
            <td>{{ $stok->variasi}}</td>
            <td>{{ $stok->warna }}</td>
            <td>{{ $stok->stok}}</td>
            <td>{{ date('d-m-Y', strtotime($stok->tanggal_input))}}</td>
            <td class="text-center d-flex">
                <a class="btn btn-info btn-sm mr-2" href="{{ route('stok.show',$stok->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>
                <a class="btn btn-primary btn-sm mr-2" href="{{ url('/admin/stok/'.$stok->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>
            <form action="{{ url('/admin/stok/'.$stok->id) }}" method="POST">
              @method('DELETE')
              @csrf
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
