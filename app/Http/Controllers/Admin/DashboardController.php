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
        return view('admin.dashboard.menu.dashboard', compact('pin'));
    }

    public function sdq()
    {
        return view('admin.dashboard.menu.sdq');
    }

    public function sdqFirst()
    {
        $data = InstrumenSDQ::where('kategori', '4-10 Tahun')->get();
        return view('admin.dashboard.menu.submenu-sdq-first', compact('data'));
    }
    public function sdqSecond()
    {
        $data = InstrumenSDQ::where('kategori', '11-18 Tahun')->get();
        return view('admin.dashboard.menu.submenu-sdq-second', compact('data'));
    }

    public function srq()
    {
        $data = InstrumenSRQ::all();
        return view('admin.dashboard.menu.srq', compact('data'));
    }

    public function report(){

        return view('admin.dashboard.menu.report');
    }
}
