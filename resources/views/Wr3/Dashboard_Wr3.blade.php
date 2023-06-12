@extends('Layouts.Dashboard_Template')
@section('title', 'DASHBOARD WR3')
@section('menu')
<ul class="nav">
    <li class="active ">
      <a href="/Dashboard-Wr3">
        <i class="fas fa-house-user"></i>
        <p class="text-bold"><b>Dashboard</b></p>
      </a>
    </li>
    <li>
      <a href="/Aproval-surat-permohonan-logistik-WR3">
        <i class="fas fa-user-check"></i>
        <p><b>Approval Letter</b></p>
      </a>
    </li>
  </ul>
@endsection
@section('pages_title', 'Dashboard Wakil Rektor 3 (WR3)')
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
            Total seluruh surat order logistik dalam 1 tahun.
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
            Jumlah surat yang diterima oleh WR 3 (status Approved) Dalam 1 tahun.
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
            Jumlah surat yang ditolak oleh WR 3 (status Rejected) Dalam 1 tahun.
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
                  <i class="fas fa-clock text-danger"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Waitting Logistics order letter</p>
                <p class="card-title"><b>{{$countWaiting}} Surat</b><p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-calendar"></i>
            Jumlah surat yang belum ada status surat / menunggu 
            persetujuan oleh WR 3 (status Waitting) Dalam 1 tahun.
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">List of Logistics order letter </h5>
        </div>
        <div class="card-body ">
          <table class="table table-striped">
            <thead>
            <tr class="text-center">
                <th scope="col">#ID Surat</th>
                <th scope="col">Nama Pemohon</th>
                <th scope="col">Nama Barang / Jasa</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status Surat</th>
                <th scope="col">Created at</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($suratlogistik as $no => $sl)
                <tr class="text-capitalize text-center">
                    <td>{{$sl -> id}}</td>
                    <td>{{$sl -> nama_pemohon}}</td>
                    <td>{{$sl -> nama_barang}}</td>
                    <td>{{$sl -> jumlah_barang}}</td>
                    <td>{{$sl -> total_harga}}</td>
                    <td>{{$sl -> status_surat}}</td>
                    <td>{{$sl -> created_at}}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
          <span class="container-fluid">{{$suratlogistik -> links()}}</span>
        </div>
      </div>
    </div>
  </div>
  
  @include('Layouts.about')

</div>
@endsection