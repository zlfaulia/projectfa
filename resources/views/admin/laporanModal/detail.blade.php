@extends('adminlte::page')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Laporan Modal
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach ($laporan as $item)
                            <li class="list-group-item"><b>Nama Modal: </b>{{ $item->nama_modal }}</li>
                            <li class="list-group-item"><b>Harga: </b>{{ $item->harga }}</li>
                        @endforeach
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ url('/admin/laporanModal') }}">Kembali</a>

            </div>
        </div>
    </div>
@endsection
