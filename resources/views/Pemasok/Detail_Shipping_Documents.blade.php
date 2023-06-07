@extends('Layouts.Dashboard_Template')
@section('title', 'DASHBOARD SHIPPING DOCUMENTS')
@section('menu')
<ul class="nav">
    <li>
        <a href="/Dashboard-Pemasok">
          <i class="fas fa-house-user"></i>
          <p class="text-bold"><b>Dashboard</b></p>
        </a>
      </li>
      <li class="active">
        <a href="/Shipping-Documents">
          <i class="fas fa-shipping-fast"></i>
          <p><b>Shipping Documents</b></p>
        </a>
      </li>
  </ul>
@endsection
@section('pages_title', 'Form Shipping Documents')
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
                <label class="text-dark">Total Down Payment</label>
                <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> pembayaran_dp }}</b></h5>
              </div>
              <div class="col-4">
                <label class="text-dark">Total FULL Payment</label>
                <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> pembayaran_lunas }}</b></h5>
              </div>
              <div class="col"></div>
            </div>
            <div class="mt-2">
              <label class="text-dark">Total Bayar</label>
              <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> total_bayar }}</b></h5>
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

            <form action="/proses-shipping-document-{{ $transaksilogistik -> id }}" method="POST">
              @csrf
              @method('PUT')
              <div class="mt-2">
                <div class="row">
                  <div class="col">
                    <label class="text-dark">Kirim Manifest / Shipping Documents</label>
                    <input type="file" name="shipping_doc" class="form-control">
                  </div>
                </div>
              </div>
              <button class="btn btn-success text-uppercase" onclick="return confirm('Pastikan File Manifest / Shipping Document telah sesuai.')">Prosses</button>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection