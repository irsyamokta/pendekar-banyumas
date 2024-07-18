<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneratePin;
use App\Models\InstrumenSDQ;
use App\Models\InstrumenSRQ;

class DashboardController extends Controller
{
    public function index()
    {
        $pin = GeneratePin::all()->sortDesc()->take(1);

        if($pin->isEmpty()){
            $pin = [null];
            return view('admin.dashboard.dashboard', compact('pin'));
        }

        return view('admin.dashboard.dashboard', compact('pin'));
    }

    public function sdq()
    {
        $data = InstrumenSDQ::all();
        return view('admin.dashboard.sdq', compact('data'));
    }

    public function srq()
    {
        $data = InstrumenSRQ::all();
        return view('admin.dashboard.srq', compact('data'));
    }

    public function report(){

        return view('admin.dashboard.report');
    }
}
