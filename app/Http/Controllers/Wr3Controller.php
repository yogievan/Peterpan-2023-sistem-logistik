<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratLogistik;
use App\Models\TransaksiLogistik;
use Illuminate\support\Facades\Auth;

class Wr3Controller extends Controller
{
    //View Pages
    public function Dashboard_Wr2()
    {
        $form = 1;
        $to = 99999999;
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        $suratlogistik = SuratLogistik::orderBy('id', 'DESC')->whereBetween('total_harga',[$form, $to])->paginate();
        $countAll = SuratLogistik::whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        $countApproved = SuratLogistik::where('status_surat','Approved')->whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        $countRejected = SuratLogistik::where('status_surat','Rejected')->whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        $countWaiting = SuratLogistik::where('status_surat','Waiting')->whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        return view('Wr2.Dashboard_Wr2',[
            'transaksilogistik'=>$transaksilogistik,
            'suratlogistik' => $suratlogistik,
            'countAll' => $countAll,
            'countApproved' => $countApproved,
            'countRejected' => $countRejected,
            'countWaiting' => $countWaiting,
        ]);
    }
    public function Approval_Wr2()
    {
        $form = 1;
        $to = 99999999;
        $suratlogistik = SuratLogistik::orderBy('id', 'DESC')->whereBetween('total_harga',[$form, $to])->paginate();
        return view('Wr2.Approval_Wr2', [
            'suratlogistik' => $suratlogistik,
        ]);
    }
    public function View_Approval_WR2($id)
    {
        $suratlogistik = SuratLogistik::find($id);
        return view('Wr2.View_Letter_Status', [
            'suratlogistik' => $suratlogistik,
        ]);
    }
    public function UpdateApproved_Approval_WR2($id, Request $request)
    {
        $suratlogistik = SuratLogistik::find($id);
        $suratlogistik -> status_surat = $request -> status_surat_approved;
        $suratlogistik-> save();
        return redirect('Aproval-surat-permohonan-logistik-WR2');
    }
    public function UpdateRejected_Approval_WR2($id, Request $request)
    {
        $suratlogistik = SuratLogistik::find($id);
        $suratlogistik -> status_surat = $request -> status_surat_rejected;
        $suratlogistik-> save();
        return redirect('Aproval-surat-permohonan-logistik-WR2');
    }
}
