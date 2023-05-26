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
    <div class="row">
      <div class="col-md-4">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Email Statistics</h5>
            <p class="card-category">Last Campaign Performance</p>
          </div>
          <div class="card-body ">
            <canvas id="chartEmail"></canvas>
          </div>
          <div class="card-footer ">
            <div class="legend">
              <i class="fa fa-circle text-primary"></i> Opened
              <i class="fa fa-circle text-warning"></i> Read
              <i class="fa fa-circle text-danger"></i> Deleted
              <i class="fa fa-circle text-gray"></i> Unopened
            </div>
            <hr>
            <div class="stats">
              <i class="fa fa-calendar"></i> Number of emails sent
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-title">NASDAQ: AAPL</h5>
            <p class="card-category">Line Chart with Points</p>
          </div>
          <div class="card-body">
            <canvas id="speedChart" width="400" height="100"></canvas>
          </div>
          <div class="card-footer">
            <div class="chart-legend">
              <i class="fa fa-circle text-info"></i> Tesla Model S
              <i class="fa fa-circle text-warning"></i> BMW 5 Series
            </div>
            <hr />
            <div class="card-stats">
              <i class="fa fa-check"></i> Data information certified
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection