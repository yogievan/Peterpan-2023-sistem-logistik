@extends('Layouts.Dashboard_Template')
@section('title', 'DASHBOARD INVENTARIS')
@section('menu')
<ul class="nav">
    <li>
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
      <li class="active">
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
@section('pages_title', 'Inventory of Goods')
@section('contents')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title"><strong>List Barang / Jasa</strong></h5>
        </div>
        <div class="card-body ">
          <table class="table table-striped">
            <thead>
            <tr class="text-center">
                <th scope="col">#ID Barang</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Nama Barang / Jasa</th>
                <th scope="col">Jumlah Barang / Jasa</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($barang as $no => $b)
                <tr class="text-capitalize">
                    <td class="text-center">{{$b -> id}}</td>
                    <td>{{$b -> nama_kategori}}</td>
                    <td>{{$b -> nama_barang}}</td>
                    <td>{{$b -> jumlah_barang}}</td>
                    <td>
                      <a href="/Update-inventaris-logistik-{{ $b -> id }}" class="btn btn-success fas fa-file-edit" title="Upgrade/Edit"></a>
                      <a href="/Delete-inventory-logistik-{{ $b -> id }}" class="btn btn-danger fas fa-trash-alt" title="Delete" onclick="return confirm('Anda Yakin Menghapus Barang/Jasa?')"></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <span class="container-fluid">{{$barang -> links()}}</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection