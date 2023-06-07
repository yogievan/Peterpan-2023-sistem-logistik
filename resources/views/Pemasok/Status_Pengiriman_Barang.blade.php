@extends('Layouts.Dashboard_Template')
@section('title', 'STATUS GOODS')
@section('menu')
<ul class="nav">
    <li>
        <a href="/Dashboard-Pemasok">
          <i class="fas fa-house-user"></i>
          <p class="text-bold"><b>Dashboard</b></p>
        </a>
      </li>
      <li class="active">
        <a href="/Status-Goods">
          <i class="fas fa-shipping-fast"></i>
          <p><b>Status Goods</b></p>
        </a>
      </li>
  </ul>
@endsection
@section('pages_title', 'List of Transaction Documents')
@section('contents')
<div class="content">
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
                <th scope="col">Pemesan</th>
                <th scope="col">Nama Barang / Jasa</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status DP</th>
                <th scope="col">Status Lunas</th>
                <th scope="col">Total Bayar</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($transaksilogistik as $no => $tl)
                <tr class="text-capitalize text-center">
                    <td>{{$tl -> id}}</td>
                    <td>{{$tl -> nama_logistik}}</td>
                    <td>{{$tl -> nama_barang}}</td>
                    <td>{{$tl -> jumlah_barang}}/pcs <br> <b>Rp. {{$tl -> total_harga}}</b></td>
                    <td>Rp. {{$tl -> pembayaran_dp}} <br> <b>{{ $tl -> status_dp }}</b></td>
                    <td>Rp. {{$tl -> pembayaran_lunas}} <br> <b>{{ $tl -> status_lunas }}</b></td>
                    <td><b>Rp. {{$tl -> total_bayar}}</b></td>
                    <td>
                      <a href="/Detail-status-pengiriman-barang-{{ $tl -> id }}">
                      <button class="btn btn-warning">
                        Detail
                      </button>
                      </a>
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
</div>
@endsection