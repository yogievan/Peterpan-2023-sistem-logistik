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
      <div class="col col-md-6 col-sm-6">
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
                    <p class="card-title"><b>ISI DATA</b><p>
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
                Per-tanggal {{$date}}
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Users Behavior</h5>
            <p class="card-category">24 Hours performance</p>
          </div>
          <div class="card-body ">
            <canvas id=chartHours width="400" height="100"></canvas>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="fa fa-history"></i> Updated 3 minutes ago
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('Layouts.about')
</div>
@endsection