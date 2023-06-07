@extends('Layouts.Dashboard_Template')
@section('title', 'DETAIL TRANSAKSI LOGISTIK')
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
@section('pages_title', 'Detail Transaction')
@section('contents')
<div class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header ">
              <h4><strong>Detail of Transaction Logistic</strong></h4>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col">
                    <label class="text-dark">Nama Pemohon Pengajuan Surat Logistik</label>
                    <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_pemohon }}</b></h5>
                </div>
                <div class="col">
                    <label class="text-dark">Nama Tim Logistik</label>
                    <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_logistik }}</b></h5>
                </div>
                <div class="col">
                    <label class="text-dark">Nama Rektor / WR 3</label>
                    <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_rektor_wr3 }}</b></h5>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <label class="text-dark">Kategori Barang</label>
                  <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_kategori }}</b></h5>
                </div>
                <div class="col">
                  <label class="text-dark">Nama Barang atau Jasa</label>
                  <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_barang }}</b></h5>
                </div>
                <div class="col">
                  <label class="text-dark">Jumlah Barang atau Jasa</label>
                  <h5 class="text-uppercase"><b>{{ $transaksilogistik -> jumlah_barang }} pcs</b></h5>
                </div>
              </div>
              <div class="mt-2">
                <label class="text-dark">Total Harga Barang atau Jasa</label>
                <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> total_harga }}</b></h5>
              </div>
              <div class="row mt-2">
                <div class="col-4">
                  <label class="text-dark">Total Down Payment (DP)</label>
                  <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> pembayaran_dp }}</b></h5>
                </div>
                <div class="col">
                  <label class="text-dark">Full Payment</label>
                  <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> pembayaran_lunas }}</b></h5>
                </div>
              </div>
              <div class="row">
                <div class="col"></div>
                <div class="col-4">
                  <label class="text-dark">Total Bayar</label>
                  <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> total_bayar }}</b></h5>
                </div>
              </div>
              <div class="mt-2">
                <h4 class="text-dark">Bukti Bayar</h4>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <label class="text-dark">Bukti Bayar Down Payment (DP)</label>
                  <img src="../assets/img/Bukti_Bayar/{{ $transaksilogistik -> bukti_dp }}" alt="Bukti Down Payment">
                </div>
                <div class="col">
                  <label class="text-dark">Bukti Bayar Full Payment (Pelunasan)</label>
                  <img src="../assets/img/Bukti_Bayar/{{ $transaksilogistik -> bukti_lunas }}" alt="Bukti Full Payment">
                </div>
              </div>
              <div class="mt-2 form-group">
                <label class="text-dark">Status Pengiriman Barang</label>
                <h5><b>{{ $transaksilogistik -> status_pengiriman}}</b></h5>
              </div>
              <div class="row">
                <div class="col-2">
                  <form action="/Status-barang-sampai-{{ $transaksilogistik -> id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="status_pengiriman_sampai" value="Barang Diterima" hidden>
                    <button class="btn btn-success text-uppercase">Barang Diterima</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection