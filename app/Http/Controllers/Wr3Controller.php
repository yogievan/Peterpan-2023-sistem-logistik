<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wr3Controller extends Controller
{
    //View Pages
    public function Dashboard_Wr3()
    {
        return view('Wr3.Dashboard_Wr3');
    }
    public function Approval_Wr3()
    {
        return view('Wr3.Approval_Wr3');
    }
}
