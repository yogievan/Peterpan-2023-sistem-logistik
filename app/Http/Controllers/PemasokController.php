<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiLogistik;
use App\Models\SuratLogistik;

class PemasokController extends Controller
{
    //View Pages
    public function Dashboard_Pemasok()
    {
        $date = date('d-m-y');
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        $countAll = SuratLogistik::whereYear('updated_at', now()->year)->count('status_surat');
        $countTransaction = TransaksiLogistik::whereYear('updated_at', now()->year)->where('status_surat', 'Approved')->count('status_surat');
        return view('Pemasok.Dashboard_Pemasok',[
            'transaksilogistik' => $transaksilogistik,
            'countAll' => $countAll,
            'countTransaction' => $countTransaction,
            'date' => $date,
        ]);
    }
    public function Status_Goods()
    {
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        return view('Pemasok.Status_Pengiriman_Barang',[
            'transaksilogistik' => $transaksilogistik,
        ]);
    }
    public function View_Status_pengiriman($id)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        return view('Pemasok.Detail_Pengiriman_Barang',[
            'transaksilogistik' => $transaksilogistik,
        ]);
    }
    public function Proses_Status_pengiriman($id, Request $request)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        $transaksilogistik -> status_pengiriman = $request -> status_pengiriman;
        $transaksilogistik -> save();
        return redirect('Dashboard-Pemasok');
    }
    public function Detail_Transaction($id)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        return view('Pemasok.Detail_Transaction_Documents',[
            'transaksilogistik' => $transaksilogistik,
        ]);
    }
}
