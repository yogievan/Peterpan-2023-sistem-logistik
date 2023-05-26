<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biro2Controller extends Controller
{
    //View Pages
    public function Dashboard_Biro2()
    {
        return view('Biro2.Dashboard_Biro2');
    }
    public function Payment_Order()
    {
        return view('Biro2.Payment_Order');
    }
}
