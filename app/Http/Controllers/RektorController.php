<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratLogistik;
use App\Models\TransaksiLogistik;

class RektorController extends Controller
{
    //View Pages
    public function Dashboard_Rektor()
    {
        $form = 100000000;
        $to = 10000000000000000000000000000000000000000000000000000000000000;
        $transaksilogistik = TransaksiLogistik::orderBy('id', 'DESC')->paginate();
        $suratlogistik = SuratLogistik::orderBy('id', 'DESC')->whereBetween('total_harga',[$form, $to])->paginate();
        $countAll = SuratLogistik::whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        $countApproved = SuratLogistik::where('status_surat','Approved')->whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        $countRejected = SuratLogistik::where('status_surat','Rejected')->whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        $countWaiting = SuratLogistik::where('status_surat','Waiting')->whereYear('updated_at', now()->year)->whereBetween('total_harga',[$form, $to])->count('status_surat');
        return view('Rektor.Dashboard_Rektor',[
            'transaksilogistik'=>$transaksilogistik,
            'suratlogistik' => $suratlogistik,
            'countAll' => $countAll,
            'countApproved' => $countApproved,
            'countRejected' => $countRejected,
            'countWaiting' => $countWaiting,
        ]);
    }
    public function Approval_Rektor()
    {
        $form = 100000000;
        $to = 10000000000000000000000000000000000000000000000000000000000000;
        $suratlogistik = SuratLogistik::orderBy('id', 'DESC')->whereBetween('total_harga',[$form, $to])->paginate();
        return view('Rektor.Approval_Rektor',[
            'suratlogistik' => $suratlogistik,
        ]);
    }
    public function View_Approval_Rektor($id)
    {
        $suratlogistik = SuratLogistik::find($id);
        return view('Rektor.View_Letter_Status', [
            'suratlogistik' => $suratlogistik,
        ]);
    }
    public function UpdateApproved_Approval_Rektor($id, Request $request)
    {
        $suratlogistik = SuratLogistik::find($id);
        $suratlogistik -> status_surat = $request -> status_surat_approved;
        $suratlogistik-> save();
        return redirect('Aproval-surat-permohonan-logistik-Rektor');
    }
    public function UpdateRejected_Approval_Rektor($id, Request $request)
    {
        $suratlogistik = SuratLogistik::find($id);
        $suratlogistik -> status_surat = $request -> status_surat_rejected;
        $suratlogistik-> save();
        return redirect('Aproval-surat-permohonan-logistik-Rektor');
    }
}
