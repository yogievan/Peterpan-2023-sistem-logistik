@extends('Layouts.Dashboard_Template')
@section('title', 'CREATE TRANSAKSI LOGISTIK')
@section('menu')
<ul class="nav">
  <li>
    <a href="/Dashboard-logistik">
      <i class="fas fa-house-user"></i>
      <p class="text-bold"><b>Dashboard</b></p>
    </a>
  </li>
  <li class="active">
    <a href="/Order-logistik">
      <i class="fas fa-shopping-cart"></i>
      <p><b>Logistics Order</b></p>
    </a>
  </li>
  <li>
      <a href="/Inventaris-logistik">
        <i class="fas fa-box"></i>
        <p><b>Inventory</b></p>
      </a>
  </li>
  <li>
      <a href="/Create-user">
          <i class="fas fa-users"></i>
          <p><b>Create Users</b></p>
      </a>
  </li>
</ul>
@endsection
@section('pages_title', 'Create Order Form by Logistics Order Letter')
@section('contents')
<div class="content">
  <main class="form-control">
    <form action="/Proses-create-transaksi-surat-pengajuan-logistik" method="POST">
      @csrf
      <div class="form-floating mt-2">
          <div class="form-floating">
            <label for="floatingInput"><b>Nama Lengkap Orang Tim Logistik</b></label>
            <input type="text" name="nama_logistik" class="form-control" id="floatingInput" placeholder="Nama Lengkap Orang Tim Logistik" required>
          </div>
          <div class="form-floating mt-2">
              <label for="floatingInput"><b>Nama Lengkap Pemohon</b></label>
              <input type="text" name="nama_pemohon" class="form-control" id="floatingInput" placeholder="Nama Lengkap Pemohon" value="{{ $suratlogistik-> nama_pemohon }}" readonly>
          </div>
          <div class="form-floating mt-2">
            <label for="floatingInput"><b>Tipe Kategori barang / Jasa</b></label>
            <input type="text" name="nama_kategori" class="form-control" id="floatingInput" placeholder="Nama Kategori" value="{{ $suratlogistik-> nama_kategori }}" readonly>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Nama Barang / Jasa</b></label>
            <input type="text" name="nama_barang" class="form-control" id="floatingInput" placeholder="Nama Barang / Jasa" value="{{ $suratlogistik-> nama_barang }}" readonly>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Kuantitas (Qty)</b></label>
            <input type="number" name="jumlah_barang" class="form-control" id="floatingInput" placeholder="Qty" value="{{ $suratlogistik-> jumlah_barang }}" readonly>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Total Harga</b></label>
            <div class="input-group">
              <span class="input-group-text">Rp.</span>
              <input type="number" name="total_harga" class="form-control" value="{{ $suratlogistik-> total_harga }}" readonly>
            </div>
          </div>
          <div class="form-floating">
            <label for="floatingInput"><b>Nama Lengkap Rektor / WR3</b></label>
            <input type="text" name="nama_rektor_wr3" class="form-control" id="floatingInput" placeholder="Nama Lengkap Rektor / WR3" required>
          </div>
          <fieldset disabled>
            <div class="form-floating mt-3">
              <label for="floatingInput"><b>Status Surat</b></label>
              <input type="text" name="status_surat" class="form-control" value="{{ $suratlogistik-> status_surat }}" readonly>
            </div>
          </fieldset>
          {{-- START input for input status surat --}}
          <input type="text" name="status_surat" class="form-control" value="{{ $suratlogistik-> status_surat }}" hidden>
          {{-- END input for input status surat --}}

          {{-- <div class="form-floating mt-3">
            <label for="floatingInput"><b>Upload Invoice DP</b></label>
            <div class="input-group mb-3">
              <input type="file" name="pembayaran_dp" class="form-control" id="inputGroupFile01">
            </div>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Upload Invoice Lunas</b></label>
            <div class="input-group mb-3">
              <input type="file" name="pembayaran_lunas" class="form-control" id="inputGroupFile01">
            </div>
          </div> --}}
      </div>
      <div class="form-floating mt-4">
        <button class="btn btn-lg btn-danger" type="submit">Create Transaksi Order Logistik</button>
      </div>
    </form>
  </main>
</div>
@endsection