@extends('Layouts.Dashboard_Template')
@section('title', 'CREATE INVENTORY')
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
@section('pages_title', 'Create Inventory for New Transaction of Goods')
@section('contents')
<div class="content">
  <main class="form-control">
    <form action="/Proses-create-inventori-logistik" method="POST">
      @csrf
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
            <input type="number" name="jumlah_barang" class="form-control" id="floatingInput" placeholder="Qty" value="{{ $barang-> jumlah_barang }}" readonly>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Total Harga</b></label>
            <input type="number" name="total_harga" class="form-control" id="floatingInput" placeholder="Qty" value="{{ $barang-> total_harga }}" readonly>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Tanggal Beli</b></label>
            <input type="date" name="tgl_pembelian" class="form-control" id="floatingInput" placeholder="Qty">
          </div>
      </div>
      <div class="form-floating mt-4">
        <button class="btn btn-lg btn-danger" type="submit">Create Inventory Logistik</button>
      </div>
    </form>
  </main>
</div>
@endsection