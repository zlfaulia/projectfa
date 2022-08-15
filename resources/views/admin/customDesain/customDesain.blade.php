@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Custom Desain</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-secondary" href="{{ url('/admin/customDesain/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan Data Baru</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Kategori</th>
            <th>Bahan</th>
            <th>Desain</th>
            <th>Pesan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($custom_desains as $customDesain)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{$customDesain->kategori}}</td>
            <td>{{$customDesain->bahan}}</td>
            <td>{{$customDesain->desain}}</td>
            <td>{{$customDesain->pesan}}</td>
            <td class="text-center d-flex">
                <a class="btn btn-info btn-sm mr-2" href="{{ route('customDesain.show',$customDesain->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-primary btn-sm mr-2" href="{{ url('/admin/customDesain/'.$customDesain->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>
            <form action="{{ url('/admin/customDesain/'.$customDesain->id) }}" method="POST">
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
