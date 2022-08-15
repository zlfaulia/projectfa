@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Laporan Modal</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-secondary" href="{{ url('/admin/laporanModal/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan Dokumentasi Baru</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Nama Modal</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bahans as $laporanModal)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{$laporanModal->nama_modal}}</td>
            <td>{{$laporanModal->harga}}</td>
            <td class="text-center d-flex">
                <a class="btn btn-info btn-sm mr-2" href="{{ route('laporanModal.show',$laporanModal->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-primary btn-sm mr-2" href="{{ url('/admin/laporanModal/'.$laporanModal->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>
            <form action="{{ url('/admin/laporanModal/'.$laporanModal->id) }}" method="POST">
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
