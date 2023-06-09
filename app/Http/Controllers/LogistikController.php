<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratLogistik;
use App\Models\TransaksiLogistik;
use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\support\Facades\Auth;


class LogistikController extends Controller
{
    public function Dashboard_Logistik()
    {
        $date = date('d-m-y');
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        $countAll = SuratLogistik::whereYear('updated_at', now()->year)->count('status_surat');
        $countApproved = SuratLogistik::where('status_surat','Approved')->whereYear('updated_at', now()->year)->count('status_surat');
        $countRejected = SuratLogistik::where('status_surat','Rejected')->whereYear('updated_at', now()->year)->count('status_surat');
        $countWaiting = SuratLogistik::where('status_surat','Waiting')->whereYear('updated_at', now()->year)->count('status_surat');
        $countGoods = Barang::whereYear('updated_at', now()->year)->count('id');
        return view('Logistik.Dashboard_Logistik', 
        [
            'transaksilogistik'=>$transaksilogistik,
            'countAll' => $countAll,
            'countApproved' => $countApproved,
            'countRejected' => $countRejected,
            'countGoods' => $countGoods,
            'countWaiting' => $countWaiting,
            'date' => $date,

        ]);
    }
    public function Order_Logistik()
    {
        $suratlogistik = SuratLogistik::orderBy('id', 'DESC')->where('status_surat', 'Approved')->paginate();
        return view('Logistik.Order_Logistik',['suratlogistik' => $suratlogistik]);
    }
    public function Inventaris_Logistik()
    {
        $barang = Barang::orderBy('id', 'DESC')->paginate();
        return view('Logistik.Inventory_Logistik', ['barang'=>$barang]);
    }
    public function Create_User()
    {
        return view('Logistik.Create_User');
    }
    public function User_Create(Request $request)
    {
        User::create([
            'nama_user' => $request -> nama_user,
            'role' => $request -> role,
            'username' => $request -> username,
            'password' => bcrypt($request -> password),
        ]);
        return redirect('Dashboard-logistik');
    }
    public function View_Create_Transaksi_Logistik($id)
    {

        $suratlogistik = SuratLogistik::find($id);
        $kategori = Kategori::orderBy('id','ASC')->paginate();
        return view('Logistik.Create_Transaksi_Surat_Pengajuan_Logistik',['suratlogistik' => $suratlogistik, 'kategori'=> $kategori]);
    }
    public function Create_Transaksi_Logistik(Request $request)
    {
        TransaksiLogistik::create([
            'nama_logistik' => $request -> nama_logistik,
            'nama_pemohon' => $request -> input('nama_pemohon'),
            'nama_kategori' => $request -> input('nama_kategori'),
            'nama_barang' => $request -> input('nama_barang'),
            'jumlah_barang' => $request -> input('jumlah_barang'),
            'total_harga' => $request -> input('total_harga'),
            'nama_rektor_wr3' => $request -> nama_rektor_wr3,
            'status_surat' => $request -> input('status_surat'),
        ]);
        return redirect('Order-logistik');
    }
    public function View_Create_inventory_logistik($id)
    {
        $barang = SuratLogistik::find($id);
        return view('Logistik.Create_Inventory_Logistik',['barang' => $barang]);
    }
    public function Create_inventory_logistik(Request $request)
    {
        Barang::create([
            'nama_kategori' => $request -> input('nama_kategori'),
            'nama_barang' => $request -> input('nama_barang'),
            'jumlah_barang' => $request -> input('jumlah_barang'),
            'total_harga' => $request -> input('total_harga'),
            'tgl_pembelian' => $request -> tgl_pembelian,
        ]);
        return redirect('Inventaris-logistik');
    }
    public function detail_transaksi_logistik($id)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        return view('Logistik.Detail_Transaksi',[
            'transaksilogistik'=>$transaksilogistik,
        ]);
    }
    public function update_detail_transaksi_logistik($id, Request $request)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        $transaksilogistik -> status_pengiriman = $request -> status_pengiriman_sampai;
        $transaksilogistik -> save();
        return redirect('Dashboard-logistik');
    }
    public function update_inventory_logistik($id, Request $request)
    {
        $barang = Barang::find($id);
        return view('Logistik.update_Inventory_Logistik',['barang' => $barang]);
    }
    public function proses_update_inventory_logistik($id, Request $request)
    {
        $barang = Barang::find($id);
        $barang -> jumlah_barang = $request -> jumlah_barang;
        $barang -> save();
        return redirect('Inventaris-logistik');
    }
    public function delete_inventory_logistik($id)
    {
        $barang = Barang::find($id);
        $barang -> delete();
        return redirect('Inventaris-logistik');
    }
}
