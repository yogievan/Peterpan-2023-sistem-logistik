<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiLogistik;
use App\Models\SuratLogistik;

class Biro2Controller extends Controller
{
    //View Pages
    public function Dashboard_Biro2()
    {
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        $countAll = SuratLogistik::whereYear('updated_at', now()->year)->count('status_surat');
        $countTransaction = TransaksiLogistik::whereYear('updated_at', now()->year)->where('status_surat', 'Approved')->count('status_surat');
        return view('Biro2.Dashboard_Biro2',[
            'transaksilogistik' => $transaksilogistik,
            'countAll' => $countAll,
            'countTransaction' => $countTransaction,
        ]);
    }
    public function Payment_Order()
    {
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        return view('Biro2.Payment_Order',[
            'transaksilogistik' => $transaksilogistik,
        ]);
    }
    public function DP_Detail_payment_Order($id)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        return view('Biro2.Detail_Transaksi_DP',[
            'transaksilogistik' => $transaksilogistik,
        ]);
    }
    public function FULL_Detail_payment_Order($id)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        return view('Biro2.Detail_Transaksi_Lunas',[
            'transaksilogistik' => $transaksilogistik,
        ]);
    }
    public function Proses_DP_payment_Order($id, Request $request)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        $transaksilogistik -> pembayaran_dp = $request -> pembayaran_dp_old + $request -> pembayaran_dp;
        $transaksilogistik -> total_bayar = $request -> pembayaran_dp + $request -> pembayaran_dp_old;
        $transaksilogistik -> status_dp = $request -> status_dp;
        $transaksilogistik -> status_lunas = $request -> status_lunas;
        $transaksilogistik -> bukti_dp = $request -> bukti_dp;
        $transaksilogistik -> save();
        return redirect('Dashboard-Biro2');
    }
    public function Proses_Lunas_payment_Order($id, Request $request)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        $transaksilogistik -> pembayaran_lunas = $request -> pembayaran_lunas;
        $transaksilogistik -> total_bayar = $request -> pembayaran_lunas + $request -> pembayaran_dp;
        $transaksilogistik -> bukti_lunas = $request -> bukti_lunas;
        $transaksilogistik -> status_dp = $request -> status_dp;
        $transaksilogistik -> status_lunas = $request -> status_lunas;
        $transaksilogistik -> save();
        return redirect('Dashboard-Biro2');
    }
}
