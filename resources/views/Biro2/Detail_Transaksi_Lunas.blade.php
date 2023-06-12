@extends('Layouts.Dashboard_Template')
@section('title', 'DETAIL TRANSAKSI LOGISTIK')
@section('menu')
<ul class="nav">
  <li>
    <a href="/Dashboard-Biro2">
      <i class="fas fa-house-user"></i>
      <p class="text-bold"><b>Dashboard</b></p>
    </a>
  </li>
  <li class="active">
    <a href="/Payment-Order-Biro2">
      <i class="fas fa-money-check"></i>
      <p><b>Payment</b></p>
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
              <div class="mt-2">
                <label class="text-dark">Total Down Payment</label>
                <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> pembayaran_dp }}</b></h5>
              </div>

              <form action="/proses-Lunas-pembayaran-{{ $transaksilogistik -> id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-2">
                  <div class="row">
                    <div class="col">
                      <label class="text-dark">Total Full Payment</label>
                      <input type="text" name="pembayaran_lunas" class="form-control" placeholder="Nominal Bayar" value="{{$transaksilogistik -> total_harga - $transaksilogistik -> pembayaran_dp}}">
                      <input type="text" name="pembayaran_dp" class="form-control" placeholder="Nominal Bayar" value="{{$transaksilogistik -> pembayaran_dp }}" hidden> 
                      <input type="text" name="status_lunas" class="form-control" placeholder="Nominal Bayar" value="Complate" hidden>
                      <input type="text" name="status_dp"  class="form-control" placeholder="Nominal Bayar" value="Complate" hidden>
                    </div>
                    <div class="col">
                      <label class="text-dark">Bukti Payment</label>
                      <input type="file" name="bukti_lunas"  class="form-control" title="Bukti Pembayaran">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                      <p class="card-category text-danger">Note: *Pembayaran DP terlebih dahulu jika barang telah sampai <b>WAJIB</b> melakukan pelunasan.</p>
                  </div>
                </div>
                <button class="btn btn-success text-uppercase" onclick="return confirm('Pastikan Nominal Uang Sudah Sesuai dengan Bukti Bayar!')">Payment Prosses</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection