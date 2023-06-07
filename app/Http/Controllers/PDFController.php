<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratLogistik;
use App\Models\TransaksiLogistik;
use App\Models\Kategori;
use App\Models\Barang;
Use PDF;

class PDFController extends Controller
{
    public function Generate_PDF_Detail_Transaction($id)
    {
        $transaksilogistik = TransaksiLogistik::find($id);
        $cetak = date('d-m-y');
        $data = [
            'title' => 'Detail Transaction Logistics',
            'date' => date('d-m-y'),
            'transaksilogistik' => $transaksilogistik
        ];
        $pdf = PDF::loadView('GeneratePDF.Detail_Transaction_Documents_PDF', $data);
        return $pdf->download('Detail_Transaction_'.$cetak.'.pdf');
    }
}
