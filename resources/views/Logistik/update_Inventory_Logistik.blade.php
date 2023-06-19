@extends('Layouts.Dashboard_Template')
@section('title', 'UPDATE INVENTORY')
@section('menu')
<ul class="nav">
  <li>
    <a href="/Dashboard-logistik">
      <i class="fas fa-house-user"></i>
      <p class="text-bold"><b>Dashboard</b></p>
    </a>
  </li>
  <li>
    <a href="/Order-logistik">
      <i class="fas fa-shopping-cart"></i>
      <p><b>Logistics Order</b></p>
    </a>
  </li>
  <li class="active">
      <a href="/Inventaris-logistik">
        <i class="fas fa-box"></i>
        <p><b>Inventory</b></p>
      </a>
  </li>
  {{-- <li>
      <a href="/Create-user">
          <i class="fas fa-users"></i>
          <p><b>Create Users</b></p>
      </a>
  </li> --}}
</ul>
@endsection
@section('pages_title', 'Update Inventory')
@section('contents')
<div class="content">
  <main class="form-control">
    <form action="/Proses-update-inventory-logistik-{{ $barang -> id }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-floating mt-2">
          <div class="form-floating mt-2">
            <label for="floatingInput"><b>Tipe Kategori barang / Jasa</b></label>
            <input type="text" name="nama_kategori" class="form-control" id="floatingInput" placeholder="Nama Kategori" value="{{ $barang-> nama_kategori }}" readonly>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Nama Barang / Jasa</b></label>
            <input type="text" name="nama_barang" class="form-control" id="floatingInput" placeholder="Nama Barang / Jasa" value="{{ $barang-> nama_barang }}" readonly>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Kuantitas (Qty)</b></label>
            <input type="number" name="jumlah_barang" class="form-control" id="floatingInput" placeholder="Qty">
          </div>
      </div>
      <div class="form-floating mt-4">
        <button class="btn btn-lg btn-danger" type="submit">Update Inventory Logistik</button>
      </div>
    </form>
  </main>
</div>
@endsection