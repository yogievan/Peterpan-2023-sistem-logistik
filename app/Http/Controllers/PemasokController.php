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
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        $countAll = SuratLogistik::whereYear('updated_at', now()->year)->count('status_surat');
        $countTransaction = TransaksiLogistik::whereYear('updated_at', now()->year)->where('status_surat', 'Approved')->count('status_surat');
        return view('Pemasok.Dashboard_Pemasok',[
            'transaksilogistik' => $transaksilogistik,
            'countAll' => $countAll,
            'countTransaction' => $countTransaction,
        ]);
    }
    public function Shipping_Documents()
    {
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        return view('Pemasok.Shipping_Documents',[
            'transaksilogistik' => $transaksilogistik,
        ]);
    }
    public function View_Shipping_Documents($id)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        return view('Pemasok.Detail_Shipping_Documents',[
            'transaksilogistik' => $transaksilogistik,
        ]);
    }
    public function Proses_Shipping_Documents($id, Request $request)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        $transaksilogistik -> shipping_doc = $request -> shipping_doc;
        $transaksilogistik -> save();
        return redirect('Dashboard-Pemasok');
    }
    public function Detail_Transaction($id)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        return view('Pemasok.Detail_Transaction_With_Shipping_Documents',[
            'transaksilogistik' => $transaksilogistik,
        ]);
    }
}
