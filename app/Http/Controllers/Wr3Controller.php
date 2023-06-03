<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratLogistik;
use App\Models\TransaksiLogistik;

class Wr3Controller extends Controller
{
    //View Pages
    public function Dashboard_Wr3()
    {
        $form = 1;
        $to = 99999999;
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        $suratlogistik = SuratLogistik::orderBy('id', 'DESC')->whereBetween('total_harga',[$form, $to])->paginate();
        $countAll = SuratLogistik::whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        $countApproved = SuratLogistik::where('status_surat','Approved')->whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        $countRejected = SuratLogistik::where('status_surat','Rejected')->whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        $countWaiting = SuratLogistik::where('status_surat','Waiting')->whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        return view('Wr3.Dashboard_Wr3',[
            'transaksilogistik'=>$transaksilogistik,
            'suratlogistik' => $suratlogistik,
            'countAll' => $countAll,
            'countApproved' => $countApproved,
            'countRejected' => $countRejected,
            'countWaiting' => $countWaiting,
        ]);
    }
    public function Approval_Wr3()
    {
        $form = 1;
        $to = 99999999;
        $suratlogistik = SuratLogistik::orderBy('id', 'DESC')->whereBetween('total_harga',[$form, $to])->paginate();
        return view('Wr3.Approval_Wr3', [
            'suratlogistik' => $suratlogistik,
        ]);
    }
    public function View_Approval_WR3($id)
    {
        $suratlogistik = SuratLogistik::find($id);
        return view('Wr3.View_Letter_Status', [
            'suratlogistik' => $suratlogistik,
        ]);
    }
    public function UpdateApproved_Approval_WR3($id, Request $request)
    {
        $suratlogistik = SuratLogistik::find($id);
        $suratlogistik -> status_surat = $request -> status_surat_approved;
        $suratlogistik-> save();
        return redirect('Aproval-surat-permohonan-logistik-WR3');
    }
    public function UpdateRejected_Approval_WR3($id, Request $request)
    {
        $suratlogistik = SuratLogistik::find($id);
        $suratlogistik -> status_surat = $request -> status_surat_rejected;
        $suratlogistik-> save();
        return redirect('Aproval-surat-permohonan-logistik-WR3');
    }
}
