@extends('Layouts.Dashboard_Template')
@section('title', 'APPROVAL INVENTARIS by WAKIL REKTOR 2')
@section('menu')
<ul class="nav">
    <li>
      <a href="/Dashboard-Wr2">
        <i class="fas fa-house-user"></i>
        <p class="text-bold"><b>Dashboard</b></p>
      </a>
    </li>
    <li class="active ">
      <a href="/Aproval-surat-permohonan-logistik-WR2">
        <i class="fas fa-user-check"></i>
        <p><b>Approval Letter</b></p>
      </a>
    </li>
  </ul>
@endsection
@section('pages_title', 'Approval of Logistics Order Letter')
@section('contents')
<div class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header ">
              <h4><strong>Detail of Letter Order Logistics</strong></h4>
            </div>
            <div class="card-body ">
              <div>
                <label class="text-dark">Nama Pemohon Pengajuan Surat Logistik</label>
                <h5 class="text-uppercase"><b>{{ $suratlogistik -> nama_pemohon }}</b></h5>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <label class="text-dark">Kategori Barang</label>
                  <h5 class="text-uppercase"><b>{{ $suratlogistik -> nama_kategori }}</b></h5>
                </div>
                <div class="col">
                  <label class="text-dark">Nama Barang atau Jasa</label>
                  <h5 class="text-uppercase"><b>{{ $suratlogistik -> nama_barang }}</b></h5>
                </div>
                <div class="col">
                  <label class="text-dark">Jumlah Barang atau Jasa</label>
                  <h5 class="text-uppercase"><b>{{ $suratlogistik -> jumlah_barang }} pcs</b></h5>
                </div>
              </div>
              <div class="mt-2">
                <label class="text-dark">Total Harga Barang atau Jasa</label>
                <h5 class="text-uppercase"><b>Rp. {{ $suratlogistik -> total_harga }}</b></h5>
              </div>
              
              <div class="row">
                <div class="col-2">
                  <form action="/Approved-Surat-permohonan-logistik-WR2-{{ $suratlogistik -> id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="status_surat_approved" value="Approved" hidden>
                    <button class="btn btn-success text-uppercase">Approved</button>
                  </form>
                </div>

                <div class="col">
                  <form action="/Reject-Surat-permohonan-logistik-WR2-{{ $suratlogistik -> id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="status_surat_rejected" value="Rejected" hidden>
                    <button class="btn btn-danger text-uppercase">Rejected</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection