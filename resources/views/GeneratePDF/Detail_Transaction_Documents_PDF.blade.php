<head>
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<div class="content">
  <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h4><strong>Detail of Transaction Logistic</strong></h4>
            <p>Tanggal Cetak: {{ $date }}</p>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col">
                  <label class="text-dark">Nama Pemohon Pengajuan Surat Logistik</label>
                  <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_pemohon }}</b></h5>
              </div>
              <div class="col">
                  <label class="text-dark">Nama Tim Logistik</label>
                  <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_logistik }}</b></h5>
              </div>
              <div class="col">
                  <label class="text-dark">Nama Rektor / WR 3</label>
                  <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_rektor_wr3 }}</b></h5>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col">
                <label class="text-dark">Kategori Barang</label>
                <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_kategori }}</b></h5>
              </div>
              <div class="col">
                <label class="text-dark">Nama Barang atau Jasa</label>
                <h5 class="text-uppercase"><b>{{ $transaksilogistik -> nama_barang }}</b></h5>
              </div>
              <div class="col">
                <label class="text-dark">Jumlah Barang atau Jasa</label>
                <h5 class="text-uppercase"><b>{{ $transaksilogistik -> jumlah_barang }} pcs</b></h5>
              </div>
            </div>
            <div class="mt-2">
              <label class="text-dark">Total Harga Barang atau Jasa</label>
              <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> total_harga }}</b></h5>
            </div>
            <div class="row mt-2">
              <div class="col-4">
                <label class="text-dark">Total Down Payment (DP)</label>
                <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> pembayaran_dp }}</b></h5>
              </div>
              <div class="col">
                <label class="text-dark">Full Payment</label>
                <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> pembayaran_lunas }}</b></h5>
              </div>
            </div>
            <div class="row">
              <div class="col"></div>
              <div class="col-4">
                <label class="text-dark">Total Bayar</label>
                <h5 class="text-uppercase"><b>Rp. {{ $transaksilogistik -> total_bayar }}</b></h5>
              </div>
            </div>
            {{-- <div class="mt-2">
              <h4 class="text-dark">Bukti Bayar</h4>
            </div>
            <div class="row mt-2">
              <div class="col">
                <label class="text-dark">Bukti Bayar Down Payment (DP)</label>
                <img src="../assets/img/Bukti_Bayar/{{ $transaksilogistik -> bukti_dp }}" alt="Bukti Down Payment">
              </div>
              <div class="col">
                <label class="text-dark">Bukti Bayar Full Payment (Pelunasan)</label>
                <img src="../assets/img/Bukti_Bayar/{{ $transaksilogistik -> bukti_lunas }}" alt="Bukti Full Payment">
              </div>
            </div> --}}
            <div class="mt-2 form-group">
              <label class="text-dark">Status Pengiriman Barang</label>
              <h5><b>{{ $transaksilogistik -> status_pengiriman}}</b></h5>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>