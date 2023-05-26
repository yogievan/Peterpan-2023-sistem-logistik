@extends('Layouts.Dashboard_Template')
@section('title', 'DASHBOARD PEMOHON BARANG/JASA')
@section('menu')
<ul class="nav">
    <li>
        <a href="/Dashboard-Pemasok">
          <i class="fas fa-house-user"></i>
          <p class="text-bold"><b>Dashboard</b></p>
        </a>
      </li>
      <li class="active">
        <a href="/Shipping-Documents">
          <i class="fas fa-shipping-fast"></i>
          <p><b>Shipping Documents</b></p>
        </a>
      </li>
  </ul>
@endsection
@section('pages_title', 'Form Shipping Documents')
@section('contents')
<div class="content">

</div>
@endsection