@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Produk</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-secondary" href="{{ url('/admin/produk/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan Produk Baru</a>
    </div>
    <table class="table table-striped teble-responsive">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Gambar Produk</th>
            <th>Nama Produk</th>
            <th>Deskripsi Produk</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produks as $produk)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $produk->kode_produk}}</td>
            <td><img src="{{asset('public/gambar_produk/'.$produk->gambar_produk)}}" style="width: 60px;"></td>
            {{-- <td>{{ $produk->gambar_produk }}</td> --}}
            <td>{{ $produk->nama_produk}}</td>
            <td>{{ $produk->deskripsi_produk }}</td>
            <td class="text-center d-flex">
                <a class="btn btn-info btn-sm mr-2" href="{{ route('produk.show',$produk->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-primary btn-sm mr-2" href="{{ url('/admin/produk/'.$produk->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>
            <form action="{{ url('/admin/produk/'.$produk->id) }}" method="POST">
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
