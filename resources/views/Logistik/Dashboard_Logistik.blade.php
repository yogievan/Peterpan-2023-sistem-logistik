@extends('Layouts.Dashboard_Template')
@section('title', 'DASHBOARD LOGISTIK')
@section('menu')
<ul class="nav">
    <li class="active ">
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
@section('pages_title', 'Dashboard Logistik')
@section('contents')
<div class="content">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
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
              @php
                  $date = date('d-m-y');
              @endphp
              Dalam 1 Tahun
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-body ">
            <div class="row">
              <div class="col-5 col-md-4">
                <div class="icon-big text-center icon-warning">
                    <i class="fas fa-file-signature text-success"></i>
                </div>
              </div>
              <div class="col-7 col-md-8">
                <div class="numbers">
                  <p class="card-category">Approved Logistics order letter</p>
                  <p class="card-title"><b>{{$countApproved}} Surat</b><p>
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
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-body ">
            <div class="row">
              <div class="col-5 col-md-4">
                <div class="icon-big text-center icon-warning">
                    <i class="fas fa-file-signature text-danger"></i>
                </div>
              </div>
              <div class="col-7 col-md-8">
                <div class="numbers">
                  <p class="card-category">Rejected Logistics order letter</p>
                  <p class="card-title"><b>{{$countRejected}} Surat</b><p>
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
      
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-body ">
            <div class="row">
              <div class="col-5 col-md-4">
                <div class="icon-big text-center icon-warning">
                    <i class="fas fa-boxes text-primary"></i>
                </div>
              </div>
              <div class="col-7 col-md-8">
                <div class="numbers">
                  <p class="card-category">Number of Goods</p>
                  <p class="card-title"><b>{{$countGoods}} Goods</b><p>
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
            <p class="card-category">Per-tanggal {{$date}}</p>
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
                  <th scope="col">Status Surat</th>
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
                      <td>{{$tl -> status_surat}}</td>
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