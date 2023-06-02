<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratLogistik;
use App\Models\Kategori;

class PemohonController extends Controller
{
    //View Pages
    public function Dashboard_Pemohon()
    {
        $suratlogistik = SuratLogistik::orderBy('id', 'DESC')->paginate();
        $countAll = SuratLogistik::whereYear('updated_at', now()->year)->count('status_surat');
        $countApproved = SuratLogistik::where('status_surat','Approved')->whereYear('updated_at', now()->year)->count('status_surat');
        $countRejected = SuratLogistik::where('status_surat','Rejected')->whereYear('updated_at', now()->year)->count('status_surat');
        $countWaiting = SuratLogistik::where('status_surat','Waiting')->whereYear('updated_at', now()->year)->count('status_surat');
        return view('Pemohon.Dashboard_Pemohon', 
        [
            'suratlogistik' => $suratlogistik,
            'countAll' => $countAll,
            'countApproved' => $countApproved,
            'countRejected' => $countRejected,
            'countWaiting' => $countWaiting,
        ]);
    }
    public function Surat_Pengajuan_Logistik()
    {
        $kategori = Kategori::orderBy('id','ASC')->paginate();
        return view('Pemohon.Surat_pengajuan_logistik', ['kategori'=> $kategori]);
    }

    //create
    public function create_surat_logistik(Request $request)
    {
        SuratLogistik::create([
            'nama_pemohon' => $request -> nama_pemohon,
            'nama_kategori' => $request -> nama_kategori,
            'nama_barang' => $request -> nama_barang,
            'jumlah_barang' => $request -> jumlah_barang,
            'total_harga' => $request -> total_harga,
            'status_surat' => 'Waiting',
        ]);
        return redirect('Dashboard-pemohon');
    }

    //update
    public function view_update_surat_logistik($id)
    {
        $suratlogistik = SuratLogistik::find($id);
        $kategori = Kategori::orderBy('id','ASC')->paginate();
        return view('Pemohon.update_Surat_Pengajuan_Logistik', ['suratlogistik' => $suratlogistik, 'kategori'=> $kategori]);
    }
    public function update_surat_logistik(Request $request, $id)
    {
        $suratlogistik = SuratLogistik::find($id);
        $suratlogistik -> id = $request -> id;
        $suratlogistik -> nama_pemohon = $request -> nama_pemohon;
        $suratlogistik -> nama_kategori = $request -> nama_kategori;
        $suratlogistik -> nama_barang = $request -> nama_barang;
        $suratlogistik -> jumlah_barang = $request -> jumlah_barang;
        $suratlogistik -> total_harga = $request -> total_harga;
        $suratlogistik -> status_surat = $request -> status_surat;
        $suratlogistik-> save();
        return redirect('Dashboard-pemohon');
    }
    public function delete_surat_logistik($id)
    {
        $suratlogistik = SuratLogistik::find($id);
        $suratlogistik -> delete();
        return redirect('Dashboard-pemohon');
    }
}
