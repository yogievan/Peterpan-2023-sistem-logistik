@extends('Layouts.Dashboard_Template')
@section('title', 'DASHBOARD BIRO2')
@section('menu')
<ul class="nav">
    <li class="active ">
      <a href="/Dashboard-Biro2">
        <i class="fas fa-house-user"></i>
        <p class="text-bold"><b>Dashboard</b></p>
      </a>
    </li>
    <li>
      <a href="/Payment-Order-Biro2">
        <i class="fas fa-money-check"></i>
        <p><b>Payment</b></p>
      </a>
    </li>
</ul>
@endsection
@section('pages_title', 'Dashboard Biro 2')
@section('contents')
<div class="content">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-body ">
            <div class="row">
              <div class="col-5 col-md-4">
                <div class="icon-big text-center icon-warning">
                  <i class="nc-icon nc-single-copy-04 text-warning"></i>
                </div>
              </div>
              <div class="col-7 col-md-8">
                <div class="numbers">
                  <p class="card-category">Number of Logistics order letter</p>
                  <p class="card-title"><b>{{$countAll}} Surat</b><p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="fa fa-calendar"></i>
              Dalam 1 Tahun
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-single-copy-04 text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Number of Logistics Transactions</p>
                    <p class="card-title"><b>{{ $countTransaction }} Transactions</b><p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-calendar"></i>
                Dalam 1 Tahun
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Table List of Transactions</h5>
          </div>
          <div class="card-body ">
            <table class="table table-striped">
              <thead>
              <tr class="text-center">
                  <th scope="col">#ID</th>
                  <th scope="col">Nama Pemohon</th>
                  <th scope="col">Nama Barang / Jasa</th>
                  <th scope="col">Jumlah/ Total Harga</th>
                  <th scope="col">Status DP / Status Lunas</th>
                  <th scope="col">Status Pengiriman</th>
                  <th scope="col">Total Bayar</th>
                  <th scope="col">ACTION</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($transaksilogistik as $no => $tl)
                  <tr class="text-capitalize text-center">
                      <td>{{$tl -> id}}</td>
                      <td>{{$tl -> nama_pemohon}}</td>
                      <td>{{$tl -> nama_barang}}</td>
                      <td>{{$tl -> jumlah_barang}} pcs <br> Rp.{{$tl -> total_harga}}</td>
                      <td>{{$tl -> status_dp}} / {{$tl -> status_lunas}}</td>
                      <td>{{$tl -> status_pengiriman}}</td>
                      <td><b>Rp. {{$tl -> total_bayar}}</b></td>
                      <td>
                        <a href="/GeneratePDF-Detail-Transaksi-{{ $tl -> id }}">
                          <button class="btn btn-primary">
                            Cetak
                          </button>
                        </a>
                      </td>
                  </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    @include('Layouts.about')
</div>
@endsection