@extends('Layouts.Dashboard_Template')
@section('title', 'PAYMENT by LOGISTICS ORDER LETTER')
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
@section('pages_title', 'Payment Form')
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
                <th scope="col">Nama Pemohon</th>
                <th scope="col">Nama Barang / Jasa</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status DP</th>
                <th scope="col">Status Lunas</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($transaksilogistik as $no => $tl)
                <tr class="text-capitalize text-center">
                    <td>{{$tl -> id}}</td>
                    <td>{{$tl -> nama_pemohon}}</td>
                    <td>{{$tl -> nama_barang}}</td>
                    <td>{{$tl -> jumlah_barang}}</td>
                    <td>{{$tl -> total_harga}}</td>
                    <td>{{$tl -> pembayaran_dp}} <br> <b>{{ $tl -> status_dp }}</b></td>
                    <td>{{$tl -> pembayaran_lunas}} <br> <b>{{ $tl -> status_lunas }}</b></td>
                    <td>
                      <a href="/Down-payment-Order-Biro2-{{ $tl -> id }}">
                      <button class="btn btn-warning" title="Down Payment">
                        DP
                      </button>
                      </a>
                      <a href="/Full-payment-Order-Biro2-{{ $tl -> id }}">
                        <button class="btn btn-danger" title="Full Payment">
                          Full Payment
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