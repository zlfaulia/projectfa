@extends('FE.layout.index')

@section('content')
<section class="p-lr-15 p-tb-130">
  <!-- <h5>Kategori</h5> -->
  <!-- <div class="dropdown p-tb-8 p-t-5">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Kategori</button>
    <ul class="dropdown-menu">
      <li><a href="#">Kaos Polos</a></li>
      <li><a href="#">Kemeja Batik</a></li>
      <li><a href="#">Baju Olahraga</a></li>
    </ul>
  </div> -->
  <!-- <h5>Bahan</h5> -->
  <!-- <div class="dropdown p-tb-8">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Bahan</button>
    <ul class="dropdown-menu">
      <li><a href="#">Cotton Combed</a></li>
      <li><a href="#">American Drill</a></li>
      <li><a href="#">Rayon</a></li>
    </ul>
  </div> -->
  <div class="form-group">
    <label>Pilih Kategori:</label>
    <select class="form-control" id="pilihan">
      <option>-</option>
      <option>Kaos Polos</option>
      <option>Kemeja</option>
      <option>Baju Pabrik</option>
    </select>
  </div>
  <div class="form-group">
    <label>Pilih Bahan:</label>
    <select class="form-control" id="pilihan">
      <option>-</option>
      <option>Cotton Combed</option>
      <option>American Drill</option>
      <option>Rayon</option>
    </select>
  </div>

  <h5>Desain</h5>
  <input class="p-tb-8" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />
  <p>File yang disarankan berupa file (coreldraw/lainnya)</p>

  <!-- <div class="dropdown p-tb-8">
    <button class="btn btn-secondary dropdown-toggle" style="background-color: rgb(129, 120, 118)" type="button" data-toggle="dropdown">Variasi</button>
    <ul class="dropdown-menu">
      <li><a href="#">Lengan Pendek</a></li>
      <li><a href="#">Lengan Panjang</a></li>
    </ul>
  </div> -->
  <div class="form-group">
    <label>Pilih Variasi:</label>
    <select class="form-control">
      <option>-</option>
      <option>Lengan Panjang</option>
      <option>Lengan Pendek</option>
    </select>
  </div>

  <!-- <div class="form-group">
    <label>Pilih Jurusan:</label>
    <select class="form-control">
      <option>-</option>
      <option>Sistem Informasi</option>
      <option>Teknik Informatika</option>
      <option>Teknik Sipil</option>
    </select>
  </div> -->
</section>
@endsection