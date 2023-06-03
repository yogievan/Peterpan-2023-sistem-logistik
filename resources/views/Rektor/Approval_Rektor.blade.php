@extends('Layouts.Dashboard_Template')
@section('title', 'APPROVAL INVENTARIS by REKTOR')
@section('menu')
<ul class="nav">
    <li>
        <a href="/Dashboard-Rektor">
          <i class="fas fa-house-user"></i>
          <p class="text-bold"><b>Dashboard</b></p>
        </a>
    </li>
    <li class="active ">
        <a href="/Aproval-surat-permohonan-logistik-Rektor">
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
                <th scope="col">ACTION</th>
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
                    <td>
                      <a href="/Detail-surat-permohonan-logistik-Rektor-{{ $sl -> id }}">
                        <button class="btn btn-warning">Detail</button>
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