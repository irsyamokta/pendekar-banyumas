<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneratePin;

class TestController extends Controller
{
    public function inputPin()
    {
        return view('client.page.screening.page.input-pin');
    }

    public function checkPin(Request $request)
    {
        $latestPinRecord = GeneratePin::orderBy('created_at', 'desc')->first();
        $latestPin = $latestPinRecord ? $latestPinRecord->pin : null;
        $pinInput = $request->input_pin;

        if($latestPin && $latestPin === $pinInput){
            return redirect()->back()->with('success', 'PIN yang anda masukkan sesuai');
        }else{
            return redirect()->back()->with('error', 'Ooppss... Pin yang Anda masukkan salah!');
        }
    }
}
