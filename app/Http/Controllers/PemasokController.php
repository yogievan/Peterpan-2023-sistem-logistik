<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemasokController extends Controller
{
    //View Pages
    public function Dashboard_Pemasok()
    {
        return view('Pemasok.Dashboard_Pemasok');
    }
    public function Shipping_Documents()
    {
        return view('Pemasok.Shipping_Documents');
    }
}
