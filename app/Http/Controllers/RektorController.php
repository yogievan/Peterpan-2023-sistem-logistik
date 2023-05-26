<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RektorController extends Controller
{
    //View Pages
    public function Dashboard_Rektor()
    {
        return view('Rektor.Dashboard_Rektor');
    }
    public function Approval_Rektor()
    {
        return view('Rektor.Approval_Rektor');
    }
}
