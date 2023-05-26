@extends('Layouts.Dashboard_Template')
@section('title', 'DASHBOARD ORDER LOGISTIK')
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
@section('pages_title', 'Logistics Order Letter')
@section('contents')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title"><strong>List Surat Permohonan Logistik</strong></h5>
          <p class="card-category">
            *Diurutkan berdasarkan Surat Permohonan Logistik terakhir di upload atau dibuat oleh Users.
            <br><b>*Pembuatan Transaksi Pemesanan diperlukan Status Surat 'Yes' karena telah disetujui oleh Rektor / WR 3.</b>
          </p>
        </div>
        <div class="card-body ">
          <table class="table table-striped">
            <thead>
            <tr class="text-center">
                <th scope="col">#ID Surat</th>
                <th scope="col">Nama Pemohon</th>
                <th scope="col">Nama Barang / Jasa</th>
                <th scope="col">Jumlah Barang / Jasa</th>
                <th scope="col">Total Biaya</th>
                <th scope="col">Status Surat</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($suratlogistik as $no => $sl)
                <tr class="text-capitalize">
                    <td class="text-center">{{$sl -> id}}</td>
                    <td>{{$sl -> nama_pemohon}}</td>
                    <td>{{$sl -> nama_barang}}</td>
                    <td>{{$sl -> jumlah_barang}}</td>
                    <td>{{$sl -> total_harga}}</td>
                    <td>{{$sl -> status_surat}}</td>
                    <td>
                        <a href="/Create-surat-transaksi-order-logistik-{{ $sl -> id }}" class="btn btn-primary fas fa-file-invoice-dollar" 
                          title="Create Transactions" onclick="return confirm('Anda Akan Membuat Transaksi Logistik? Penuhi SYARAT terlebih dahulu!')">
                        </a>
                        <a href="/Create-inventaris-logistik-{{ $sl -> id }}" class="btn btn-warning fas fa-warehouse" title="Create Inventory for Goods"></a>
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