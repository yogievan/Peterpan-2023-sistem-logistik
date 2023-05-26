@extends('Layouts.Dashboard_Template')
@section('title', 'DASHBOARD PEMOHON BARANG/JASA')
@section('menu')
<ul class="nav">
    <li>
      <a href="/Dashboard-pemohon">
        <i class="fas fa-house-user"></i>
        <p class="text-bold"><b>Dashboard</b></p>
      </a>
    </li>
    <li class="active">
      <a href="/Surat-pengajuan-logistik">
        <i class="fas fa-paste"></i>
        <p><b>Pengajuan Logistik</b></p>
      </a>
    </li>
  </ul>
@endsection
@section('pages_title', 'Form Surat Permohonan Logistik')
@section('contents')
<div class="content">
  <main class="form-control">
    <form action="/create-surat-pengajuan-logistik" method="POST">
      @csrf
      <div class="form-floating mt-2">
          <div class="form-floating">
              <label for="floatingInput"><b>Nama Lengkap Pemohon</b></label>
              <input type="text" name="nama_pemohon" class="form-control" id="floatingInput" placeholder="Nama Lengkap Pemohon" required>
          </div>
          <div class="form-floating mt-2">
            <label for="floatingInput"><b>Tipe Kategori barang / Jasa</b></label>
            <select name="nama_kategori" class="form-control" required>
                @foreach ($kategori as $no => $k)
                    <option value="{{ $k -> nama_kategori }}">{{ $k -> nama_kategori }}</option>
                @endforeach
            </select>
            <p class="text-danger mt-1">&nbsp *Note : 
              <br>&nbsp  Gedung = penambahan partisi, ruang-ruang
              <br>&nbsp  Peralatan = TV, AC, kulkas, HP, dispenser, dll
              <br>&nbsp  Perabotan = meja, kursi, sofa, almari, filling cabinet., dll
              <br>&nbsp  Komputer & jaringan = PC, printer, router, dll
            </p>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Nama Barang / Jasa</b></label>
            <input type="text" name="nama_barang" class="form-control" id="floatingInput" placeholder="Nama Barang / Jasa" required>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Kuantitas (Qty)</b></label>
            <input type="number" name="jumlah_barang" class="form-control" id="floatingInput" placeholder="Qty" required>
          </div>
          <div class="form-floating mt-3">
            <label for="floatingInput"><b>Total Harga</b></label>
            <div class="input-group">
              <span class="input-group-text">Rp.</span>
              <input type="number" name="total_harga" class="form-control" required>
            </div>
          </div>
          <fieldset disabled>
            <div class="form-floating mt-3">
              <label for="floatingInput"><b>Status Surat</b></label>
              <input type="text" name="status_surat" class="form-control" value="No">
            </div>
          </fieldset>
          <p class="text-danger mt-1">&nbsp *Status surat diisi oleh Rektor atau Wakil Rektor 3</p>
      </div>
      <div class="form-floating mt-4">
        <button class="btn btn-lg btn-danger" type="submit">Create Surat Pemohonan Logistik</button>
      </div>
    </form>
  </main>
</div>
@endsection